<?php
// http://localhost/testproject/superglobals/356.php?name=Markus&age=25
print_r($_GET);
echo "<br>" . $_GET["name"] . " " . $_GET["age"];
