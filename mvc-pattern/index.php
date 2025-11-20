<?php
require_once("init.php");

$user_controller = $user_container->build("user_controller");
$user_controller->index();
