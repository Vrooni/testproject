<?php
session_start();
print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 361</title>
</head>

<body>
  <h3>Hello <?php echo $_SESSION["username"] ?></h3>
</body>

</html>