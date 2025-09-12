<?php
echo abs(-1.2) . "<br>";
echo "<br>";

echo round(3.4) . "<br>";
echo round(3.5) . "<br>";
echo round(3.456, 2) . "<br>";
echo "<br>";

echo ceil(3.00001) . "<br>";
echo floor(3.9999) . "<br>";
echo "<br>";

echo sqrt(16) . "<br>";
echo 16 ** 0.5 . "<br>";
echo "<br>";

echo pow(2, 3) . "<br>";
echo 2 ** 3 . "<br>";
echo "<br>";

echo pi() . "<br>";
echo "<br>";

echo sin(deg2rad(90)) . "<br>";
echo cos(deg2rad(0)) . "<br>";
echo tan(deg2rad(45)) . "<br>";
echo "<br>";

echo rad2deg(asin(1)) . "<br>";
echo rad2deg(acos(1)) . "<br>";
echo rad2deg(atan(1)) . "<br>";
echo "<br>";

// euler log
echo log(M_E) . "<br>";
echo log10(100) . "<br>";
echo log(8, 2) . "<br>";
echo "<br>";

echo random_int(1, 100) . "<br>";
echo rand(1, 100) . "<br>";
echo mt_rand(1, 100) . "<br>";
