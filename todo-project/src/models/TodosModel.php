<?php

namespace App\models;

use App\models\BaseModel;
use Exception;
use PDO;

class TodosModel extends BaseModel
{
  // get all todos from db
  public function get_todos()
  {
    $query = "SELECT * FROM todos";

    try {
      $stmt = $this->connection->prepare($query);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  // save a todo to db
  public function save_todo($name, $descr)
  {
    $query = "INSERT INTO todos (name, descr, status) VALUES (:name, :descr, 0)";

    try {
      $stmt = $this->connection->prepare($query);
      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":descr", $descr);
      $stmt->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  // update a todo in db
  public function update_todo($id, $status)
  {
    $query = "UPDATE todos SET status = :status WHERE id = :id";

    try {
      $stmt = $this->connection->prepare($query);
      $stmt->bindParam(":id", $id);
      $stmt->bindParam(":status", $status);
      $stmt->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  // delete a todo in db
  public function delete_todo($id)
  {
    $query = "DELETE FROM todos WHERE id = :id";

    try {
      $stmt = $this->connection->prepare($query);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}
