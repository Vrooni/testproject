<?php
enum Color
{
  case Red;
  case Green;
  case Blue;
}

function getDescription(Color $color)
{
  return match ($color) {
    Color::Red => "The Color is red",
    Color::Green => "The Color is green",
    Color::Blue => "The Color is blue"
  };
}

echo getDescription(Color::Red);
