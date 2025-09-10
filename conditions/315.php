<?php
$weekday = 2;
echo match ($weekday) {
  1 => "Monday",
  2 => "Tuesday",
  3 => "Wednesday",
  4 => "Thursday",
  5 => "Friday",
  6 => "Saturday",
  7 => "Sunday",
  default => "Unknown day"
};

echo "<br>";
$temperature = 0;
echo match (true) {
  $temperature <= -10 => "It's fucking cold",
  $temperature <= 13 => "It's cold",
  $temperature <= 24 => "The temperature is mild",
  default => "It's hot!"
};

echo "<br>";
$num = -0;
echo match (true) {
  $num < 0 => "The number is negative",
  $num > 0 => "The number is positive",
  default => "The number is zero",
};
