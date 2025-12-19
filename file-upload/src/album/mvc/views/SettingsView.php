<?php
require_once(__DIR__ . "/../../../app/design/header.php");
require_once __DIR__ . "/navbar.php";
?>

<br>
<div class="container">
  <a href="/Album"><button class="btn btn-secondary">Zurück</button></a>
</div>

<br>
<div class="container">
  <h1 class="alert alert-warning text-center">Settings <?php echo $album->name ?></h1>
</div>

<br>
<div class="container">
  <div class="form-group mb-3">
    <form method="post" id="update-album-form">
      <div id="rel-settings">
        <?php require_once __DIR__ . "/../../../album/mvc/views/ajaxsettings.php"; ?>
      </div>
    </form>
  </div>
</div>

<br>
<div class="container">
  <form method="post" id="album-cover-form" enctype="multipart/form-data">
    <label for="exampleCover">Album Cover</label>
    <input type="file" name="cover" class="form-control" id="exampleCover" accept="image/*">
    <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
    <button type="submit" class="mt-3 btn btn-secondary">Speichern</button>
  </form>
  <p><?php echo $error; ?></p>
</div>

<script src="´../../../../../testproject/file-upload/src/album/ajax/UpdateAlbum.js"></script>

<?php
require_once(__DIR__ . "/../../../app/design/footer.php");
?>