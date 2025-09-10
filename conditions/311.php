<?php
$age = 16;

if ($age >= 18) {
  echo "You're allowed to see porn";
} elseif ($age >= 16) {
  echo "You're allowed to party";
} else {
  echo "You're not allowed to do anything";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 311</title>
</head>

<body>
  <?php if ($age > 5): ?>
    <p>You're older than 5 years</p>
  <?php else: ?>
    <p>You're not older than 5 years</p>
  <?php endif; ?>
</body>

</html>