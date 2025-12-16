<?php

use App\app\Container;

require_once("autoload.php");
$container = new Container();

function html(string $str): string
{
  return htmlentities($str, ENT_QUOTES, 'UTF-8');
}
