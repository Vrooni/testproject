<?php
function increment()
{
  static $num = 0;
  $num++;

  if ($num > 10) {
    echo "$num is greater than 10<br>";
  } else {
    echo "$num<br>";
  }
}


for ($i = 0; $i < 15; $i++) {
  increment();
}
