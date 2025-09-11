<?php
$keys = ["name", "age", "city"];
$values = [NULL, 23, "Hannova"];
$map = array_combine($keys, $values);
var_dump(key_exists("name", $map), key_exists("color", $map), array_key_exists("name", $map));
