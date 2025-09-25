<?php
class Test
{
  private $a = "Hello";
  private $b = "World";
  public function __toString()
  {
    return $this->a . " " . $this->b;
  }
}

$test = new Test();
echo $test;
