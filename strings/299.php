<?php
$text = "Hello World, welcome, to the World of php.<br>";
$split_text = explode(",", $text);
echo implode($split_text);
echo implode(" -", $split_text);
