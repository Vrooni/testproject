<?php
class Vehicle1
{
  private $color = "black";

  function set_color($color)
  {
    $this->color = $color;
  }

  function get_color()
  {
    return $this->color;
  }
}

$audi = new Vehicle1;
$bmw = clone $audi;
$bmw->set_color("green");

echo $audi->get_color() . "<br>";
echo $bmw->get_color() . "<br>";
