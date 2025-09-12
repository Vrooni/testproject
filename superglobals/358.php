<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 357</title>
</head>

<body>
  <?php
  // DO NOT USE, all information for GET, POST or Cookie
  if ($_REQUEST) {
    var_dump($_REQUEST);
  }
  ?>
  <form action="358.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Send</button>
  </form>
</body>

</html>