<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 258</title>
</head>

<body>
  <?php
  $number = "1";
  $result = $number + 1;
  var_dump($result);
  var_dump((int) $number);
  var_dump(intval($number));

  settype($number, "integer");
  var_dump($number);
  echo "<br>";

  $array = [1, 2, "hi"];
  var_dump((object) $array);
  ?>
</body>

</html>