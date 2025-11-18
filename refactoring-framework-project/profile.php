<?php

require_once("init.php");

$user_db = $user_container->build("user_data_base");
$users = $user_db->get_user($_GET["userid"]);

foreach ($users as $user) {
  echo $user["username"] . "<br>";
  echo $user["mail"] . "<br>";
  echo $user["bio"] . "<br>";
}
