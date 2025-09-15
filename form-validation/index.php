<?php

$errormsg = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (isset($_POST["send-login"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $password = $_POST["password"];

    // Metazeichen: Spezielle Zeichen mit besonderer Bedeutung.
    // .: Ein beliebiges Zeichen (außer einem Zeilenumbruch).
    // ^: Anfang der Zeichenkette.
    // $: Ende der Zeichenkette.
    // *: Null oder mehr des vorherigen Zeichens.
    // +: Eins oder mehr des vorherigen Zeichens.
    // ?: Null oder eins des vorherigen Zeichens.
    // []: Zeichenklasse. Beispiel: [a-z] findet alle Kleinbuchstaben.
    // \: Escape-Zeichen, um Metazeichen zu maskieren.
    // \d: Digit 0-9 [0-9] //Beispiel \
    // Quantifizierer: Bestimmen die Anzahl der Vorkommen.
    // {n}: Genau n Vorkommen.
    // {n,}: Mindestens n Vorkommen.
    // {n,m}: Zwischen n und m Vorkommen.
    // Gruppierung: Runde Klammern () werden verwendet, um Gruppen zu erstellen und Operationen zu steuern.
    $passwort_pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[@$!.*?%&§])(?=.*\d)[A-Za-z\d@$!.*?%&§]{8,16}$/';

    switch (true) {
      case empty($_POST["username"]):
        $errormsg = "Username is not set";
        break;

      case !ctype_alpha($_POST["username"]);
        $errormsg = "Username has invalid chars";
        break;

      case empty($_POST["email"]):
        $errormsg = "Email is not set<br>";
        break;

      case empty($_POST["password"]):
        $errormsg = "Password is not set<br>";
        break;

      case !(bool)preg_match($passwort_pattern, $_POST["password"]):
        $errormsg = "Password is not valid<br>";
        break;

      case !filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL):
        $errormsg = "Email is not valid<br>";
        break;

      case !empty($_POST["age"]) && !filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT, [
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

      $username = htmlspecialchars($username, ENT_QUOTES, "UTF-8");
      $email = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
      $age = htmlspecialchars($age, ENT_QUOTES, "UTF-8");
      $password = htmlspecialchars($password, ENT_QUOTES, "UTF-8");

      $username = trim($username);
      $email = trim($email);
      $age = (int) $age;

      echo "My name is $username, I'm $age years old. You can reach me under $email. And because you are here I tell you my password: $password";

      $username = null;
      $email = null;
      $age = null;
      $password = null;
    }
  }
}

require_once("form/form.php");
