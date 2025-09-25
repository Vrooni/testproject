<?php
class Test
{
  public function __construct()
  {
    echo "Parent construct<br>";
  }
}

class Test2 extends Test
{
  // Cannot have multiple constructors
  // public function __construct()
  // {
  //   echo "Test construct<br>";
  // }

  public function __construct(public $a, public $b)
  {
    parent::__construct();
    echo "Test construct<br>";
  }
}

$test = new Test2("Hi", "Hai");
echo $test;
