<?php
function text($greets, $name = "Unknown")
{
  echo "$greets $name<br>";
}

echo text("Hello");
echo text("Hello", "Markus");
