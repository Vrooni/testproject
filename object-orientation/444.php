<?php
class Vehicle
{
  function drive($sound = "Brumm brumm...")
  {
    echo "$sound<br>";
  }
}

class ElectroCar extends Vehicle
{
  function drive($sound = "Summ summ...")
  {
    echo "I'm quiet ";
    parent::drive($sound);
  }
}

$audi = new Vehicle;
$audi->drive();
$audi = new ElectroCar;
$audi->drive();
