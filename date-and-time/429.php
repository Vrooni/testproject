<?php
$date = new DateTime();
echo date("Y-m-d") . "<br>";
echo $date->format("Y-m-d") . "<br>";
echo date("d.m.Y") . "<br>";
echo $date->format("d.m.Y") . "<br>";
echo "<br>";

$now = time();
$silvester = new DateTime();
$year = (int) $date->format("Y") + 1;
$silvester->setDate($year, 1, 1);
$silvester->setTime(0, 0, 0);
$silvester = $silvester->getTimestamp();
$time_diff = $silvester - $now;
$days = $time_diff / (60 * 60 * 24);
echo "Only " . (int) $days . " days to Silvester" . "<br>" . "<br>";

var_dump(checkdate(2, 29, 2025));
echo "<br>";
$date = DateTime::createFromFormat("Y-m-d", "2025-02-29");
var_dump($date);
