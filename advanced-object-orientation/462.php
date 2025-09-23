<?php

class Person
{
  // also works with get
  // private $name = "Markus";

  private $info = ["name" => "Markus", "age" => 23];

  public function __get($param)
  {
    if (array_key_exists($param, $this->info)) {
      return $this->info[$param];
    }
  }
}

$person = new Person;
echo $person->name . "<br>";
