<?php
$text = "    Hello World,  welcome to the World of php.<br>   ";
var_dump($text);
var_dump(trim($text));
$text = "!!   Hello World,  welcome to the World of php.<br>   ";
var_dump(trim($text, "!"));

$text = "   Hello World,  welcome to the World of php.<br>   ";
var_dump(ltrim($text));
var_dump(rtrim($text));

$text = " !!! < Hello World,  welcome to the World of php.<br>   ";
var_dump(trim($text, " !<"));
