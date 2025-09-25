<?php
class Todo
{
  public function __construct(private string $title) {}
  public function get_title()
  {
    return $this->title;
  }
}
