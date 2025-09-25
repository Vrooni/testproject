<?php
class Todo_Item
{
  public function __construct(private string $title) {}
  public function get_title()
  {
    return $this->title;
  }
}
