<?php
class Vehicle
{
  private $brand;
  private $model;
  private $speed;

  function set_speed($speed)
  {
    $this->speed = $speed;
  }

  function get_speed()
  {
    return $this->speed;
  }

  function accelerate($amount)
  {
    $this->speed += $amount;
  }
}

$kia = new Vehicle;
$kia->set_speed(120);
$kia->accelerate(10);
echo $kia->get_speed() . " km fast";
