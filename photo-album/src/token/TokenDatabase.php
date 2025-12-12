<?php

namespace App\token;

use App\app\AbstractDatabase;
use App\token\mvc\TokenModel;
use PDO;

class TokenDatabase extends AbstractDatabase
{

  public function get_table()
  {
    return "securitytokens";
  }

  public function get_model()
  {
    return TokenModel::class;
  }

  function get_token($identifier)
  {
    $table = $this->get_table();
    $model = $this->get_model();

    $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE identifier = '$identifier'");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);

    return $stmt->fetch(PDO::FETCH_CLASS);
  }

  function create_token($userid, $identifier, $securitytoken)
  {
    $table = $this->get_table();
    $stmt = $this->pdo->prepare("INSERT INTO $table (userid, identifier, securitytoken) 
    VALUES (:userid, :identifier, :securitytoken)");
    $stmt->execute([
      'userid' => $userid,
      'identifier' => $identifier,
      'securitytoken' => password_hash($securitytoken, PASSWORD_DEFAULT)
    ]);

    // cookie exist 1 year
    setcookie("identifier", $identifier, time() + 3600 * 24 * 365);
    setcookie("securitytoken", $securitytoken, time() + 3600 * 24 * 365);
  }

  function update_token($userid, $token)
  {
    $table = $this->get_table();
    $stmt = $this->pdo->prepare("UPDATE $table SET `securitytoken` = :token WHERE `userid` = :userid");
    $stmt->execute([
      'userid' => $userid,
      'token' => password_hash($token, PASSWORD_DEFAULT)
    ]);

    setcookie("securitytoken", $token, time() + 3600 * 24 * 365);
  }

  function delete_token($identifier)
  {
    $table = $this->get_table();
    $stmt = $this->pdo->prepare("DELETE FROM $table WHERE `identifier` = :identifier");
    $stmt->execute([
      'identifier' => $identifier
    ]);

    unset($_COOKIE['identifier']);
    setcookie('identifier', '', 1, '/');
    unset($_COOKIE['securitytoken']);
    setcookie('securitytoken', '', 1, '/');
  }
}
