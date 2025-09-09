<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 281</title>
</head>

<body>
  <?php
  // operand operator operand
  echo (true && false) ? "true" : "false";
  echo "<br>";
  echo (true and false) ? "true" : "false";
  echo "<br>";

  echo (true || false) ? "true" : "false";
  echo "<br>";
  echo (true or false) ? "true" : "false";
  echo "<br>";

  echo !true ? "true" : "false";
  echo "<br>";
  echo !false ? "true" : "false";
  echo "<br>";

  echo (false ^ true) ? "true" : "false";
  echo "<br>";
  echo (true xor true) ? "true" : "false";
  echo "<br>";
  ?>
</body>

</html>