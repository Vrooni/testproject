<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 265</title>
</head>

<body>
  <?php
  // all data types
  $str = "String";
  $int = 0;
  $flt = 2.7;
  $bool = false;
  $arr = ["String", $hello = "hello", 0, 1.2];

  // var dump
  var_dump($str);
  echo "<br>";
  var_dump($flt);
  echo "<br>";

  // get type
  echo gettype($flt);
  echo "<br>";

  // type convert
  var_dump((int) $flt);
  echo "<br>";
  var_dump((bool) $flt);
  echo "<br>";
  var_dump((bool) 0.2);
  echo "<br>";
  var_dump((bool) 0.0);
  echo "<br>";

  // isset
  var_dump(isset($int));
  echo "<br>";
  var_dump(isset($int2));
  echo "<br>";
  unset($int);
  var_dump(isset($int));
  echo "<br>";

  // is_null
  var_dump(is_null($bool));
  echo "<br>";
  echo is_null($var3);
  echo "<br>";

  // empty
  echo empty($bool);
  echo "<br>";
  echo empty($var3);
  echo "<br>";

  // reference
  $a = 3;
  $b = &$a;
  unset($a);
  var_dump($a);
  echo "<br>";
  var_dump($b);
  echo "<br>";

  // variable variables
  $name = "Trian";
  $$name = "Husten";
  echo $Trian;
  ?>
</body>

</html>