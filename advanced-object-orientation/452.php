<?php
class Vehicle
{
  public function __construct(protected $color, private $brand) {}

  private function get_color()
  {
    return $this->color;
  }

  public function print_color()
  {
    echo $this->get_color() . "<br>";
  }
}

class Car extends Vehicle
{
  public function get_color()
  {
    echo $this->color;
  }
}

$audi = new Vehicle("black", "audi");
$audi->print_color();

$audi = new Car("green", "audi");
$audi->get_color();
