<?php
function gen()
{
  yield 1;
  yield 2;
  yield 3;
}

function genRange($start, $end)
{
  for ($i = $start; $i <= $end; $i++) {
    yield $i;
  }
}

var_dump(gen());
echo "<br>";

foreach (gen() as $number) {
  echo $number . "<br>";
}
echo "<br>";

foreach (genRange(1, 10) as $number) {
  echo $number . "<br>";
}
