<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 260</title>
</head>

<body>
  <?php
  $var1 = "";
  var_dump(empty($var1));
  $var2 = 0;
  var_dump(empty($var2));
  var_dump(is_null($var2));
  $var3;
  var_dump(is_null($var3));
  var_dump(is_null($var4));
  ?>
</body>

</html>