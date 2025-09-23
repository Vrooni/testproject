<?php

interface Greeter
{
  public function greet();
}

$greeter = new class("Patrick") implements Greeter {
  public function __construct(private string $name)
  {
    $this->name = $name;
  }

  public function greet()
  {
    echo "Hello $this->name <br>";
  }
};

$greeter->greet();

$greeter2 = new $greeter("Thomsen");
$greeter2->greet();
