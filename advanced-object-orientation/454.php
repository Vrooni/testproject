<?php
// no one can extends this class
final class Car extends Vehicle {}

class Vehicle
{
  // this methods cannot be overriden
  final function drive()
  {
    echo "brumm brumm...<br>";
  }
}
