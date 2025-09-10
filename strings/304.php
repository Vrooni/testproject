<?php
$text = "Hello World, welcome to the Wörld of php.";
print_r(str_word_count($text));
echo "<br>";
// format: show words
print_r(str_word_count($text, 1));
echo "<br>";
// format: show words
print_r(str_word_count($text, 1, "ö."));
echo "<br>";
