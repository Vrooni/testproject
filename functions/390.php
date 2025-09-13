<?php
function displayWelcome()
{
  echo "Welcome!<br>";
}

function sumNumbers($num1, $num2 = 10)
{
  echo $num1 + $num2 . "<br>";
}

function listIngredients(...$ingredients)
{
  echo implode(", ", $ingredients) . "<br>";
}

function variables()
{
  $local = "local";
  global $global;
  echo "$global<br>";
}

function counter()
{
  static $count = 0;
  echo ++$count . " times called<br>";
}

$global = "Global";

displayWelcome();

sumNumbers(1, 2);
sumNumbers(4);

listIngredients("sugar", "honey", "ice", "tea");

echo isset($local) ? $local : '$local is not set' . "<br>";
variables();

for ($i = 0; $i < 5; $i++) {
  counter();
}
