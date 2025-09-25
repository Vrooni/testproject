<?php
class Test
{
  public function test()
  {
    echo __METHOD__ . "<br>";
    echo __FUNCTION__ . "<br>";
  }
}

function test2()
{
  echo __METHOD__ . "<br>";
  echo __FUNCTION__ . "<br>";
}
$test = new Test;
$test->test();

echo __FILE__ . "<br>";
echo __LINE__ . "<br>";

test2();
