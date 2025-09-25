<?php
function autoload($class)
{
  $class_path = str_replace("_", "/", $class);
  $path = "lib/$class_path.php";

  if (file_exists($path)) {
    require $path;
  }
}

spl_autoload_register("autoload");

$todo_list = new TodoList_Item("Todo List");
$todo_list->add_todo(new Todo_Item("Go for a walk"));
$todo_list->add_todo(new Todo_Item("Clean up kitchen"));
$todo_list->add_todo(new Todo_Item("Brush teeth"));

echo $todo_list->get_name() . ":<br>";
foreach ($todo_list->get_todos() as $todo) {
  echo $todo->get_title() . "<br>";
}

$controller = new Todo_Controller();
$controller->control();
