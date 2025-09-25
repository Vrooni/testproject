<?php
class Test
{
  public function __invoke()
  {
    echo "Hi, I am a test";
  }
}

$test = new Test();
var_dump(is_callable($test));
echo "<br>";
$test();
