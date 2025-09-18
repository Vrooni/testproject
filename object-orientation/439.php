<?php
class Vehicle
{
  private $color = "black";
  private $brand;

  function get_color()
  {
    return $this->color;
  }
}

$audi = new Vehicle;
echo $audi->get_color() . "<br>";
