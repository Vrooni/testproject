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

  function set_property($prop_name, $value)
  {
    $this->$prop_name = $value;
  }

  function get_property($prop_name)
  {
    return $this->$prop_name;
  }
}

$audi = new Vehicle("black", "audi");
$bmw = new Vehicle("blue", "bmw");

echo "The " . $audi->get_property("brand") . " is " . $audi->get_property("color") . "<br>";
echo "The " . $bmw->get_property("brand") . " is " . $bmw->get_property("color") . "<br>";
