<?php
$years = $months = $days = $hours = $minutes = $seconds = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $date_string = $_POST["date"];

  if (validate_date_string($date_string)) {
    if (is_future($date_string)) {
      $diff = get_diff($date_string);
      $years = $diff->y;
      $months = $diff->m;
      $days = $diff->d;
      $hours = $diff->h;
      $minutes = $diff->i;
      $seconds = $diff->s;
    } else {
      $error = "Date is not in the future";
    }
  } else {
    $error = "Invalid date";
  }
}

function validate_date_string($date_string, $format = "Y-m-d\TH:i")
{
  $date = Datetime::createFromFormat($format, $date_string);
  return $date && $date->format($format) === $date_string;
}

function get_diff($date_string)
{
  $date = new DateTime($date_string);
  $current_date = new DateTime();

  return $date->diff($current_date);
}

function is_future($date_string)
{
  $date = new DateTime($date_string);
  $current_date = new DateTime();

  return $date > $current_date;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>How much time</title>
</head>

<body>
  <div class="content-container">
    <section class="title-section">
      <h1>How much time</h1>
    </section>

    <section class="time-section">
      <div class="time-container">
        <p class="time-title">Years</p>
        <p class="time-count"><?php echo sprintf("%02d", $years) ?></p>
      </div>

      <div class="time-container">
        <p class="time-title">Months</p>
        <p class="time-count"><?php echo sprintf("%02d", $months) ?></p>
      </div>

      <div class="time-container">
        <p class="time-title">Days</p>
        <p class="time-count"><?php echo sprintf("%02d", $days) ?></p>
      </div>

      <div class="time-container">
        <p class="time-title">Hours</p>
        <p class="time-count"><?php echo sprintf("%02d", $hours) ?></p>
      </div>

      <div class="time-container">
        <p class="time-title">Minutes</p>
        <p class="time-count"><?php echo sprintf("%02d", $minutes) ?></p>
      </div>

      <div class="time-container">
        <p class="time-title">Seconds</p>
        <p class="time-count"><?php echo sprintf("%02d", $seconds) ?></p>
      </div>

    </section>

    <section class="form-section">
      <?php require_once("form.php"); ?>
      <p class="error"><?php echo $error; ?></p>
    </section>
  </div>

</body>

</html>