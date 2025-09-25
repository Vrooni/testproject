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

  // they work per default
  public function __serialize()
  {
    return [[$this->a], [$this->b]];
  }

  public function __unserialize(array $data): void
  {
    $this->a = $data[0];
    $this->b = $data[1];
  }
}

$string = serialize(new Test());
var_dump(unserialize($string));
