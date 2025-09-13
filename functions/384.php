<?php
function getName()
{
  echo "Markus<br>";
}

$getName = "getName";
$getName();

$name = "Ahyem";
$greets = function () use ($name) {
  echo "Hello $name";
};
$greets();
