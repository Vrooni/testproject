<?php
// https://www.charset.org/utf-8
$arr = ["hello", "Bello", "Dello", "Zello"];
sort($arr);
print_r($arr);
echo "<br>";

usort($arr, function ($a, $b) {
  return strtolower($a) <=> strtolower($b);
});
print_r($arr);
