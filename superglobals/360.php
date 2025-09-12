<?php
// expires in 30 days
setcookie("username", "Markus", time() + 60 * 60 * 24 * 30);
$username = $_COOKIE["username"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 360</title>
</head>

<body>
  <h3>
    <?php
    echo $username;
    ?>
  </h3>
</body>

</html>