<?php
class Vehicle
{
  public function __construct(public readonly string $color) {}
}

$audi = new Vehicle("black");
// $audi->color = "green";
