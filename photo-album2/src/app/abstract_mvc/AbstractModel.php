<?php

namespace App\app\abstract_mvc;

use ArrayAccess;

abstract class AbstractModel implements ArrayAccess
{
  public function offsetExists(mixed $offset): bool
  {
    return isset($this->$offset);
  }

  public function offsetSet(mixed $offset, mixed $value): void
  {
    $this->$offset = $value;
  }

  public function offsetGet(mixed $offset): mixed
  {
    return $this->$offset;
  }

  public function offsetUnset(mixed $offset): void
  {
    unset($this->$offset);
  }


  public function get_str_len($str)
  {
    return strlen($str);
  }
}
