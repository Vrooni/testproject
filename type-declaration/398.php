<?php
enum Color: string
{
  case Red = "The Color is red";
  case Green = "The Color is green";
  case Blue = "The Color is blue";
}

function getDescription(Color $color)
{
  return $color->value;
}

echo getDescription(Color::Green);
