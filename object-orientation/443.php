<?php
class Vehicle
{
  private $color = "black";
  private $brand;

  function drive()
  {
    echo "brumm brumm...<br>";
  }
}

class Car extends Vehicle
{
  private $doors = 5;

  function set_doors(int $doors)
  {
    if ($doors > 0) {
      $this->doors = $doors;
    }
  }

  function open_doors()
  {
    echo "Open $this->doors doors<br>";
  }
}

$audi = new Car;
$audi->set_doors(3);
$audi->drive();
$audi->open_doors();
