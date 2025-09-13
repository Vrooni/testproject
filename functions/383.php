<?php
function getName()
{
  $name = "Markus";

  return function () use ($name) {
    echo "$name <br>";
  };
}

function multiReturn()
{
  return ["number" => 23, "greets" => "Hello World"];
}

$getName = getName();
var_dump($getName);
echo "<br>";
$getName();

echo multiReturn()["number"] . ", ";
echo multiReturn()["greets"];
