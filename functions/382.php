<?php
// global variable - everywhere available (exception: functions)
$name = "Markus";
$age = 25;

function local()
{
  print_r($GLOBALS);
  echo "<br>" . $GLOBALS["name"];
}

local();
