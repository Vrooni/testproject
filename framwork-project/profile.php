<?php
require_once("database.php");
$users = get_user($_GET["userid"]);

foreach ($users as $user) {
  echo $user["username"] . "<br>";
  echo $user["mail"] . "<br>";
  echo $user["bio"] . "<br>";
}
