<?php

namespace App\album\mvc;

use App\app\abstract_mvc\AbstractController;

class AlbumController extends AbstractController
{
  public function __construct(private $album_db) {}

  public function album()
  {
    if (!empty($_POST["album"])) {
      $userid = $_POST["userid"];
      $name = $_POST["name"];
      $descr = $_POST["descr"];
      $this->album_db->create_album($userid, $name, $descr);
    }

    $album = $this->album_db->get_album($_SESSION["userid"]);
    $this->page_load("album", "AlbumView", ["album" => $album]);
  }

  public function photo()
  {
    $this->page_load("album", "PhotoSettingsView", []);
  }
}
