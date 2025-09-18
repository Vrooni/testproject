<?php
class Greeter
{
  static function greets(string $name = "Nobody"): string
  {
    return "Hello $name<br>";
  }
}

echo Greeter::greets();
echo Greeter::greets("Me");
