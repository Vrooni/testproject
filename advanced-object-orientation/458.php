<?php
abstract class Driveable2
{
  protected $brand;

  abstract public function startEngine();
  abstract public function stopEngine();

  public function get_brand()
  {
    return $this->brand;
  }
  public function set_brand($brand)
  {
    $this->brand = $brand;
  }
}

class Vehicle extends Driveable2
{
  public function startEngine(): static
  {
    echo "Start engine<br>";
    return $this;
  }

  public function stopEngine(): static
  {
    echo "Start engine<br>";
    return $this;
  }
}

$car = new Vehicle();
$car->set_brand("bmw");
echo $car->get_brand();
