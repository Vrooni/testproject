<?php
$color = "red";
echo match ($color) {
  "green" => "Color is green",
  "red" => "Color is red",
  default => "Color is unknown"
};
