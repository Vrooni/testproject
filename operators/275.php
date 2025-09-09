<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 275</title>
</head>

<body>
  <?php
  $a = 1;
  $b = 2;
  echo [] ? "Full array" : "Empty array";
  // ternarer operator
  echo $a > $b ? " yeah" : " no";
  echo $a > $b ? " yeah " : (1 === $a ? " one" : " no");
  ?>
</body>

</html>