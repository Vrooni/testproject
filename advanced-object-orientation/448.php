<?php
class Vehicle
{
  private $color;
  private $brand;

  public function __construct($color, $brand)
  {
    $this->color = $color;
    $this->brand = $brand;
  }

  function get_color()
  {
    return $this->color;
  }

  function get_brand()
  {
    return $this->brand;
  }
}

$audi = new Vehicle("black", "audi");
$bmw = new Vehicle("blue", "bmw");

echo "The " . $audi->get_brand() . " is " . $audi->get_color() . "<br>";
echo "The " . $bmw->get_brand() . " is " . $bmw->get_color() . "<br>";
