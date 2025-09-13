<?php
function greets(int $age, string $name): callable
{
  return function () use ($age, $name) {
    echo "Hello I'm $name and I'm $age";
  };
}

greets(12, "Manu")();
