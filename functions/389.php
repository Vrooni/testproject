<?php
function divide($dividend, $divisor)
{
  return $divisor === 0 ? "Divisor must not be 0" : $dividend / $divisor;
}

echo divide(1, 3) . "<br>";
echo divide(1, 0);
