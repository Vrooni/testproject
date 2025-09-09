<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 284</title>
</head>

<body>
  <?php
  echo "Hello World<br>";
  // goto jump;
  goto test;
  echo "You'll never see me again!<br>";

  jump:
  echo "jumped<br>";

  test:
  echo "Hello test<br>";
  ?>
</body>

</html>