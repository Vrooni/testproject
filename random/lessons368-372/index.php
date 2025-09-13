<?php
$randomizer = new \Random\Randomizer();
$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$chars_count = $_POST["charcount"];

if ($chars_count) {
  $chars_count = (int) $chars_count;

  if ($chars_count < 6) {
    $error = "Chars count has to be greater than 5";
    $password = "Error";
  } else {
    $error = null;
    $password = $randomizer->getBytesFromString($chars, (int)$chars_count);
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Random Password Generator</title>
</head>

<body>
  <h1>Password Generator</h1>

  <div class="password-container">
    <h3>Your password</h3>
    <p><?php echo $password ? $password : "Click generate"; ?></p>
  </div>

  <form action="#" method="post">
    <p>How many chars?</p>
    <label for="number">How many chars?</label>
    <div class="inputs-container">
      <input class="number-input" type="number" id="number" name="charcount" value="8" min="6" required>
      <input class="submit-input" type="submit" value="Generate">
    </div>
    <small>
      <?php echo $error ? $error : "" ?>
    </small>
  </form>
</body>

</html>