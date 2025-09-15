<?php
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");

$name_pattern = '/^[A-Za-z ]*$/';
$phone_pattern = '/^[0-9]*$/';

$success = "";
$error = match (true) {
  empty($name) || empty($email) || empty($phone)
  => "Please fill in all fields",

  !preg_match($name_pattern, $name)
  => "Name is not valid. Please only use letters and space",

  !filter_var($email, FILTER_VALIDATE_EMAIL)
  => "Email is not valid",

  !preg_match($phone_pattern, $phone)
  => "Number is not valid. Pleasy only use numbers",

  default
  => ""
};

if (empty($error)) {
  $success = "Successfully sended";
  $name = null;
  $email = null;
  $phone = null;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="416.css">
  <title>Lesson 416</title>
</head>

<body>
  <img src="login.png" alt="login icon">
  <form action="" method="post">
    <input type="text" name="name" placeholder="Name" value="<?php echo $name ?? '' ?>">
    <input type="email" name="email" placeholder="email@web.de" value="<?php echo $email ?? '' ?>">
    <input type="tel" name="phone" placeholder="0123456789" value="<?php echo $phone ?? '' ?>">
    <button type="submit">Send</button>
  </form>

  <p class="error"><?php echo $error; ?></p>
  <p class="success"><?php echo $success; ?></p>
</body>

</html>