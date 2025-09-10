<?php
$text1 = "Apfel";
$text2 = "cirne";
echo ($text1 <=> $text2) . "<br>";
// ascii difference
echo strcmp($text1, $text2) . "<br>";
// ascii difference not case sensitive
echo strcasecmp($text1, $text2) . "<br>";
