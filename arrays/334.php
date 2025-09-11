<?php
$fruits;
var_dump(isset($fruits));
$fruits = [];
var_dump(isset($fruits));
$fruits = ["apple", "banana", "orange"];
var_dump(isset($fruits));
var_dump(isset($fruits[1]));
var_dump(isset($fruits[4]));
