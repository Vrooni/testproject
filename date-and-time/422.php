<?php
$timestamp = time();
echo date("D: jS F, Y G:i:s (e)", $timestamp) . "<br>";

// plus 1 hours
$timestamp += 2 * 60 * 60;
echo date("D: jS F, Y G:i:s", $timestamp) . " (here)";
