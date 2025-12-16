<?php

namespace App\album\mvc;

use App\app\abstract_mvc\AbstractController;

class AlbumController extends AbstractController
{
  public function __construct(private $album_db) {}

  public function album()
  {
    $album = $this->album_db->get_album($_SESSION["userid"]);
    $this->page_load("album", "AlbumView", ["album" => $album]);
  }

  public function ajaxNewAlbum()
  {
    $userid = $_POST["userid"];
    $name = $_POST["name"];
    $descr = $_POST["descr"];
    $this->album_db->create_album($userid, $name, $descr);
  }

  public function ajaxPage()
  {
    $album = $this->album_db->get_album($_SESSION["userid"]);
    $this->page_load("album", "ajaxalbum", ["album" => $album]);
  }

  public function settings()
  {
    $id = $_GET["id"];
    $album = $this->album_db->get_album_by_id($id);
    $this->page_load("album", "SettingsView", ["album" => $album[0]]);
  }

  public function ajaxUpdateAlbum()
  {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $descr = $_POST["descr"];
    $this->album_db->update_album($id, $name, $descr);
  }

  public function ajaxSettingsPage()
  {
    $id = $_POST["id"];
    $album = $this->album_db->get_album_by_id($id);
    $this->page_load("album", "ajaxsettings", ["album" => $album[0]]);
  }
}
