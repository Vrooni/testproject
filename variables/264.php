<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 264</title>
</head>

<body>
  <?php
  $var = "Hi";
  $var2 = $var;
  $var = "Moin";
  echo $var2 . "<br>";

  $var = "Hi";
  $var2 = &$var;
  $var = "Moin";
  echo $var2 . "<br>";

  $num1 = 5;
  addOne($num1);
  echo $num1;

  function addOne(&$number)
  {
    $number++;
  }


  ?>

</body>

</html>