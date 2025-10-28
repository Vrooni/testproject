<?php

namespace App\controllers;

use App\controllers\BaseController;
use App\models\TodosModel;
use App\components\TodoCard\TodoCard;

class HomeController extends BaseController
{
  public function index()
  {
    $todos_model = new TodosModel();
    $todos = $todos_model->get_todos();

    $cards = [];
    foreach ($todos as $todo) {
      $card = new TodoCard($todo["id"], $todo["name"], $todo["descr"], $todo["status"]);
      $cards[] = $card->create_card();
    }

    $this->view("home", ["cards" => $cards]);
  }

  public function post()
  {
    $todos_model = new TodosModel();

    if (array_key_exists("done", $_POST)) {
      $todos_model->update_todo($_POST["done"], 1);
    }

    if (array_key_exists("delete", $_POST)) {
      $todos_model->delete_todo($_POST["delete"]);
    }

    if (array_key_exists("create", $_POST)) {
      $todos_model->save_todo($_POST["name"], $_POST["descr"]);
    }

    $todos = $todos_model->get_todos();

    $cards = [];
    foreach ($todos as $todo) {
      $card = new TodoCard($todo["id"], $todo["name"], $todo["descr"], $todo["status"]);
      $cards[] = $card->create_card();
    }

    $this->view("home", ["message" => "Hello World", "cards" => $cards]);
  }
}
