<?php
$fruits;
// gives error
// var_dump(in_array("apple", $fruits));
$fruits = [];
var_dump(in_array("apple", $fruits));
$fruits = ["apple", "banana", "orange"];
var_dump(in_array("apple", $fruits));
$fruits[3] = 1;
var_dump(in_array("1", $fruits));
var_dump(in_array("1", $fruits, true));
