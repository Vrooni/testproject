<?php
class Test
{
  public function __construct()
  {
    $this->a = ["Middle", "Right", "Left"];
    $this->b = [1, 2, 3];
  }

  public function test()
  {
    echo "test<br>";
  }

  // specify what to serialize
  // vs __serialize: specify what and how to serialize
  public function __sleep()
  {
    echo "hey";
    return ["a", "b"];
  }
}

echo serialize(new Test());
