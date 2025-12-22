<?php

namespace App\register\mvc;

use App\app\abstract_mvc\AbstractController;
use App\PHPMailer\Exception;
use App\PHPMailer\PHPMailer;
use App\PHPMailer\SMTP;

class RegisterController extends AbstractController
{
  public function __construct(
    private $user_db,
    private Exception $exception,
    private PHPMailer $php_mailer,
    private SMTP $smtp
  ) {}

  public function register()
  {
    $fail = null;
    if (!empty($_POST)) {
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];


      if (empty($firstname && $lastname && $username && $email && $password)) {
        $fail = "Fill in all fields";
      } else {
        $user = $this->user_db->get_user_by_email($email);

        if (empty($user)) {
          // bad, because you can create password for md5 hashed password
          // md5("password");
          // one way hashing
          $password = password_hash($password, PASSWORD_DEFAULT);

          $this->user_db->create_user($firstname, $lastname, $username, $email, $password);
          $this->php_mailer->isSMTP();
          $this->php_mailer->Host = "smtp.gmx.com";
          $this->php_mailer->SMTPAuth = true;
          $this->php_mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
          $this->php_mailer->Port = "587";
          $this->php_mailer->Username = "laura.adler@gmx.de";
          $this->php_mailer->Password = "APP-SPEZ-PASSWORD-HIER-EINFÜGEN";

          $this->php_mailer->isHTML(true);
          $this->php_mailer->Subject = "Herzlich Willkommen $username";
          $this->php_mailer->From = "laura.adler@gmx.de";
          $this->php_mailer->setFrom("laura.adler@gmx.de", "Laura Adler");
          $this->php_mailer->addReplyTo("laura.adler@gmx.de", "Laura Adler");
          $this->php_mailer->Body = "<h1>Herzlich Willkommen</h1> bei uns $username.";

          $this->php_mailer->addAddress($email, $username);

          if ($this->php_mailer->send()) {
            $fail = "Es wurde eine Email gesendet";
          } else {
            $fail = "Es konnte keine Mail abgesendet werden";
          }
        } else {
          $fail = "User already exists for email: $email";
        }
      }
    }

    $this->page_load("register", "RegisterView", ["fail" => $fail]);
  }
}
