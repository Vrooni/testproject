<?php
class Vehicle
{
  public $color = "black";
  public $brand;

  function drive($km = 1)
  {
    echo "brumm brumm... $km miles<br>";
  }
}

$audi = new Vehicle;
$audi->brand = "Audi";
echo $audi->color . "<br>";
echo $audi->brand . "<br>";
$audi->drive();

$bmw = new Vehicle;
$bmw->color = "green";
$bmw->brand = "BMW";
echo $bmw->color . "<br>";
echo $bmw->brand . "<br>";
$bmw->drive(9);
