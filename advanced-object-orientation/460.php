<?php

interface Greeter
{
  public function greet();
}

$greeter = new class("Patrick") implements Greeter {
  // they are static
  // self => class
  private const LAST_NAME = "Rock";
  // they are non-static
  // this => object
  private readonly string $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function greet()
  {
    echo "Hello $this->name " . self::LAST_NAME . "<br>";
  }
};

$greeter->greet();

$greeter2 = new $greeter("Thomsen");
$greeter2->greet();
