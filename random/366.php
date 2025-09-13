<?php
echo rand(0, 10);
echo "<br>";

echo mt_rand(0, 10);
echo "<br>";

echo rand(0, 10);
echo "<br>";

echo rand(2, mt_getrandmax());
echo "<br>";

mt_srand(1234);
echo mt_rand(0, 10);
echo "<br>";
mt_srand(1234);
echo mt_rand(0, 10);
echo "<br>";
