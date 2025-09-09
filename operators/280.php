<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 280</title>
</head>

<body>
  <?php
  echo shell_exec("ls -la");
  echo "<br>";
  echo "<br>";

  // direct output (even if it is currently running)
  $var = system("ls -la");
  echo "<br>";
  echo "<br>";

  // last row
  echo exec("ls -la");
  echo "<br>";
  echo "<br>";

  echo $var;
  echo "<br>";
  echo "<br>";

  passthru("ls -la");

  ?>
</body>

</html>