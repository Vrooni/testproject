<?php
// time since 01.01.1970
$timestamp = time();
echo date("D: jS F, Y G:i:s (e)", $timestamp) . "<br>";

$timestamp = 1757931191;
echo date("D: jS F, Y G:i:s (e)", $timestamp);
