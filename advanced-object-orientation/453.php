<?php
class Vehicle
{
  private static $name = "Audi";

  public function __construct() {}

  public static function get_name()
  {
    return Vehicle::$name;
  }

  public function get_name1()
  {
    // RETURNS null
    // return $this->name;
    return Vehicle::$name;
  }
}

echo Vehicle::get_name() . "<br>";
$car = new Vehicle();
echo $car->get_name1() . "<br>";
