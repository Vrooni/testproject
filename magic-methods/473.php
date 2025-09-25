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

  public function __wakeup()
  {
    echo "Got User Data, create Cookies for him";
  }
}

$test = serialize(new Test());
echo $test . "<br>";
echo unserialize($test);
