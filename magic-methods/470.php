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

  public function __serialize()
  {
    return [[$this->a], [$this->b]];
  }
}

echo serialize(["Middle", "Right", "Left"]) . "<br>";
echo serialize(new Test()) . "<br>";
