<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First steps with php</title>
</head>

<body>
  <h1>Hello World</h1>
  <?php
  // Line comment
  /* block comment */
  /****** comment as you like ***/
  echo "<h3>What is poppin?</h3>";
  ?>

  <?php
  $greet = require_once("test3.php");
  // print same as echo
  print $greet;
  ?>

  <?php
  echo "<h3>Alrighti?</h3>";
  include("test.php");
  require("test.php");

  include_once("test2.php");
  require_once("test2.php");
  require_once("test2.php");
  require_once("test2.php");

  // gives warning if file not found
  // include("test1.php");
  // gives error if file not found
  // require("test1.php");
  ?>

  <!-- exercise task -->
  <h1>Exercise</h1>
  <?php
  require_once "exercise/config.php";
  include_once "exercise/functions.php";
  $value = include "exercise/data.php";

  echo "<h1>Hello</h1>";
  echo "<p>Configuration: $config</p>";
  echo "<p>Function: " . myFunction() . "</p>";
  echo "<p>Data: $value</p>";
  ?>

</body>

</html>