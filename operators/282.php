<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 282</title>
</head>

<body>
  <?php
  // short-circuit-evaluation
  function isPositiv($num)
  {
    echo "Evaluate number: $num <br>";
    return $num > 0;
  }

  isPositiv(5) && isPositiv(-2);
  echo "<br>";
  isPositiv(-5) && isPositiv(-2);
  echo "<br>";
  isPositiv(5) || isPositiv(-2);
  ?>
</body>

</html>