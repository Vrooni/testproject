<?php
$date = new DateTime();
echo $date->format("D: jS F, Y G:i:s (e)") . "<br>";

$date->setDate(2029, 5, 11);
echo $date->format("D: jS F, Y G:i:s (e)") . "<br>";

$date->setTime(6, 12, 36);
echo $date->format("D: jS F, Y G:i:s (e)");
