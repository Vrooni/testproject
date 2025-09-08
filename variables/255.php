<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 255</title>
</head>

<body>
  <?php
  $a = "Hello";
  $b = "Lu";
  $c = "Age: " . 22;

  echo $c . "<br>";
  echo $a . ": " . $b . "<br>";

  $b = "Philipp";
  echo $b . "<br>";

  $B = "Susi";
  echo $B . "<br>";
  echo $b . "<br>";

  $d = $b;
  echo $d . "<br>";

  $f = "$b";
  echo $f . "<br>";

  $g = '$b';
  echo $g . "<br>";

  $h = "Hello \"World\"";
  echo $h . "<br>";

  $i = 'Hello "World"';
  echo $i . "<br>";

  $greeting = "Hello!<br>";
  $name = "My name is Lu.<br>";
  $age = "I'm 26<br>";
  $sentence = $greeting . $name . $age;
  echo $sentence;


  ?>
</body>

</html>