<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 278</title>
</head>

<body>
  <?php
  $var = null;
  $var2 = "hi";
  $var3 = null;
  $var4 = $var ?? $var2 ?? $var3 ?? "three";
  echo $var4;
  ?>
</body>

</html>