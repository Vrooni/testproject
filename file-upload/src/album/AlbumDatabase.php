<?php

namespace App\album;

use App\album\mvc\AlbumModel;
use App\app\AbstractDatabase;
use PDO;

class AlbumDatabase extends AbstractDatabase
{

  public function get_table()
  {
    return "album";
  }

  public function get_model()
  {
    return AlbumModel::class;
  }

  function get_album($userid)
  {
    $table = $this->get_table();
    $model = $this->get_model();

    $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE `userid` = :userid");
    $stmt->execute(['userid' => $userid]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  function create_album($userid, $name, $descr)
  {
    $table = $this->get_table();
    $stmt = $this->pdo->prepare("INSERT INTO $table (userid, name, descr) 
    VALUES (:userid, :name, :descr)");
    $stmt->execute([
      'userid' => $userid,
      'name' => $name,
      'descr' => $descr
    ]);
  }

  function update_album($id, $name, $descr)
  {
    $table = $this->get_table();
    $stmt = $this->pdo->prepare("UPDATE $table SET `name` = :name, `descr` = :descr WHERE `id` = :id");
    $stmt->execute([
      'id' => $id,
      'name' => $name,
      'descr' => $descr
    ]);
  }

  function update_cover($id, $cover)
  {
    $table = $this->get_table();
    $stmt = $this->pdo->prepare("UPDATE $table SET `cover` = :cover WHERE `id` = :id");
    $stmt->execute([
      'id' => $id,
      'cover' => $cover
    ]);
  }

  function get_album_by_id($id)
  {
    $table = $this->get_table();
    $model = $this->get_model();

    $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE `id` = :id");
    $stmt->execute(['id' => $id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, $model);

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }
}
