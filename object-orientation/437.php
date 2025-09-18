<?php
class Vehicle
{
  public $color = "black";
  public $brand;

  function drive()
  {
    echo "brumm brumm...<br>";
  }
}

$audi = new Vehicle;
$audi->brand = "Audi";
echo $audi->color . "<br>";
echo $audi->brand . "<br>";

$bmw = new Vehicle;
$bmw->color = "green";
$bmw->brand = "BMW";
echo $bmw->color . "<br>";
echo $bmw->brand . "<br>";
$bmw->drive();
