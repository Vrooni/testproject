<?php

$errormsg = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (isset($_POST["send-login"])) {

    switch (true) {
      case empty($_POST["username"]):
        $errormsg = "Username is not set";
        break;

      case empty($_POST["email"]):
        $errormsg = "Email is not set<br>";
        break;

      case empty($_POST["age"]):
        $errormsg = "Age is not set<br>";
        break;

      case empty($_POST["password"]):
        $errormsg = "Password is not set<br>";
        break;

      case strlen($_POST["password"]) < 8:
        $errormsg = "Password is not too short min(8)<br>";
        break;

      case !filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL):
        $errormsg = "Email is not valid<br>";
        break;

      case !filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT, [
        "options" => [
          "min_range" => 0,
          "max_range" => 120
        ]
      ]):
        $errormsg = "Age is not valid<br>";
        break;

      default:
        $errormsg = null;
        break;
    }

    if (!$errormsg) {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $age = $_POST["age"];
      $password = $_POST["password"];

      filter_var(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS)
      // will run html codes in username
      // echo $username;
      // this is why we use:
      $username = htmlspecialchars($username, ENT_QUOTES, "UTF-8");
      $email = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
      $age = htmlspecialchars($age, ENT_QUOTES, "UTF-8");
      $password = htmlspecialchars($password, ENT_QUOTES, "UTF-8");

      $username = trim($username);
      $email = trim($email);
      $age = (int) $age;

      echo "My name is $username, I'm $age years old. You can reach me under $email. And because you are here I tell you my password: $password";
    }
  }
}

require_once("form/form.php");
