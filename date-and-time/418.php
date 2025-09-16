<?php
$date = getdate();

print_r($date);
echo "<br>";

$weekday = $date["weekday"];
$day = $date["mday"];
$month = $date["month"];
$year = $date["year"];
echo "It is $weekday the $month $day, $year";
