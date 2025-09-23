<?php
interface Driveable
{
  public function startEngine();
  public function stopEngine();
  public function drive($speed);
}

interface Radio
{
  public function playMusic($song);
}

class Vehicle implements Driveable, Radio
{
  public function startEngine()
  {
    echo "Start engine<br>";
  }

  public function stopEngine()
  {
    echo "Start engine<br>";
  }

  public function drive($speed)
  {
    echo "brumm brumm $speed km/h<br>";
  }

  public function playMusic($song)
  {
    echo "summ summ $song<br>";
  }
}

$car = new Vehicle();
$car->startEngine();
$car->drive(60);
$car->playMusic("Heartbeat");
