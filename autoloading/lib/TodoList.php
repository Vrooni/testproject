<?php
class TodoList
{
  private array $todo_items = [];

  public function __construct(private string $name) {}

  public function add_todo(Todo $todo)
  {
    $this->todo_items[] = $todo;
  }

  public function get_name()
  {
    return $this->name;
  }

  public function get_todos()
  {
    return $this->todo_items;
  }
}
