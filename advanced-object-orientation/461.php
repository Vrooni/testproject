<?php

class Calculator
{
  public function add(...$numbers)
  {
    return array_sum($numbers);
  }
}

$calc = new Calculator;
echo $calc->add(1, 2, 3, 4) . "<br>";
echo $calc->add(1.0, 2.2, 3.6, 4.4) . "<br>";
echo $calc->add(1, 2.2) . "<br>";


class Printer
{
  public function __call($method, $args)
  {
    if ($method === "print") {
      echo "Print $args[0] with $args[1] copies";
    }
  }
}

$printer = new Printer;
$printer->print("BlaBlaBla", 2);
