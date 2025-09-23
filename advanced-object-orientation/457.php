<?php
interface Driveable
{
  public function startEngine();
  public function stopEngine();
  public function drive($speed);
}

class Vehicle implements Driveable
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

  public function drive($speed): static
  {
    echo "brumm brumm $speed km/h<br>";
    return $this;
  }
}

$car = new Vehicle();
$car->startEngine()->drive(60)->stopEngine();
