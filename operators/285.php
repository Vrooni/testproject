<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 285</title>
</head>

<body>
  <?php
  // arithmetic operators
  $var1 = 4;
  $var2 = 2;
  echo $var1 + $var2 . "<br>";
  echo $var1 - $var2 . "<br>";
  echo $var1 * $var2 . "<br>";
  echo $var1 / $var2 . "<br>";
  echo $var1 % $var2 . "<br>";
  echo "<br>";

  // short arithemtic operators
  $var1 += $var2;
  echo $var1 . "<br>";

  $var1 -= $var2;
  echo $var1 . "<br>";

  $var1 *= $var2;
  echo $var1 . "<br>";

  $var1 /= $var2;
  echo $var1 . "<br>";

  $var1 %= $var2;
  echo $var1 . "<br>";

  echo "<br>";

  // increment - decrement operators
  $var1 = $var2++; // post-increment
  echo $var1 . " " . $var2 . "<br>";

  $var1 = ++$var2; //pre-increment
  echo $var1 . " " . $var2 . "<br>";

  $var1 = $var2--; //post-decrement
  echo $var1 . " " . $var2 . "<br>";

  $var1 = --$var2; //pre-decrement
  echo $var1 . " " . $var2 . "<br>";

  echo "<br>";

  // exponential operator
  $var1 **= $var2;
  echo $var1 ** $var2 . "<br><br>";

  // concatenation operator
  $str = "Hello";
  $str .= " World";
  echo $str . "2<br><br>";

  // equals operators
  var_dump("2" == 2);
  echo "<br>";

  var_dump("2" === 2);
  echo "<br>";

  var_dump("2" != 2);
  echo "<br>";

  var_dump("2" !== 2);
  echo "<br>";

  var_dump("1" < 2);
  echo "<br>";

  var_dump("1" > 2);
  echo "<br>";

  var_dump("2" <= 2);
  echo "<br>";

  var_dump("1" >= 2);
  echo "<br><br>";

  // ternary operator
  echo "2" == 2 ? "equals" : "not equals";
  echo "<br><br>";

  // null coalesing operator
  echo null ?? "Hi1" ?? "hi2";
  echo "<br><br>";

  // spaceship operator
  echo (1 <=> 2) . "<br>";
  echo (2 <=> 2) . "<br>";
  echo (2 <=> 1) . "<br>";
  echo "<br>";

  // logical operators
  var_dump(true && false);
  echo "<br>";
  var_dump(true || false);
  echo "<br>";
  var_dump(true xor false);
  echo "<br>";
  var_dump(true ^ false);
  echo "<br>";
  var_dump(!false);
  echo "<br>";
  echo "<br>";

  // short circuit evaluation
  echo isPositive(-2) && isPositive(3);

  function isPositive($num)
  {
    echo "Evaluate $num<br>";
    return $num >= 0;
  }
  ?>
</body>

</html>