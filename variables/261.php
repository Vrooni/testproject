<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 261</title>
</head>

<body>
  <?php
  $var1 = "hi";
  $var2 = "hi";
  unset($var1, $var2);
  var_dump(is_null($var1));
  ?>
</body>

</html>