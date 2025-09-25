<?php
function autoload($class)
{
  $path = "lib/$class.php";

  if (file_exists($path)) {
    require $path;
  }
}

spl_autoload_register("autoload");

$todo_list = new TodoList("Todo List");
$todo_list->add_todo(new Todo("Go for a walk"));
$todo_list->add_todo(new Todo("Clean up kitchen"));
$todo_list->add_todo(new Todo("Brush teeth"));

echo $todo_list->get_name() . ":<br>";
foreach ($todo_list->get_todos() as $todo) {
  echo $todo->get_title() . "<br>";
}
