<?php
$fruits;
var_dump(empty($fruits));
$fruits = [];
var_dump(empty($fruits));
$fruits = ["apple", "", "orange"];
var_dump(empty($fruits));
var_dump(empty($fruits[1]));
var_dump(empty($fruits[4]));
