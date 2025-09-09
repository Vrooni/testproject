<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 277</title>
</head>

<body>
  <?php
  echo 0 <=> 1;
  echo "<br>";
  echo 1 <=> 1;
  echo "<br>";
  echo 1 <=> 0;
  echo "<br>";

  $arr = [1, 0, 3, 6, 8, 2];
  usort($arr, function ($a, $b) {
    return $b <=> $a;
  });
  print_r($arr);

  ?>
</body>

</html>