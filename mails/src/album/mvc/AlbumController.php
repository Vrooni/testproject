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
    $error = null;

    if (!empty($_FILES)) {

      if ($_FILES["cover"]["type"] == "image/jpeg" || $_FILES["cover"]["type"] == "image/png") {
        $file = $_FILES;
        $upload_dir = __DIR__ . "/../../uploads/";
        $file_name = $_SESSION["userid"] . $id . ".png";

        if (move_uploaded_file($file["cover"]["tmp_name"], $upload_dir . $file_name)) {
          $this->album_db->update_cover($id, $file_name);
        } else {
          $error = "Error while file upload";
        }
      } else {
        $error = "Wrong picture format";
      }
    }

    $this->page_load("album", "SettingsView", ["album" => $album[0], "error" => $error]);
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
