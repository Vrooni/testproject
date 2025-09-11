<?php
$fruits;
var_dump(is_array($fruits));
$fruits = [];
var_dump(is_array($fruits));
$fruits = ["apple", [], "orange"];
var_dump(is_array($fruits));
var_dump(is_array($fruits[1]));
var_dump(is_array($fruits[2]));
var_dump(is_array($fruits[3]));
