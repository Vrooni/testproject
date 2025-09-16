<?php
$time_string = "2024-08-15 10:30:45";

$time = new DateTime($time_string);
$timestamp = $time->getTimestamp();
echo date("D: jS F, Y G:i:s (e)", $timestamp) . "<br>";

$timestamp = strtotime($time_string);
echo date("D: jS F, Y G:i:s", $timestamp) . " (here)";
