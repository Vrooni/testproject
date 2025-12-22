<?php
require_once(__DIR__ . "/../../../app/design/header.php");
require_once __DIR__ . "/navbar.php";
?>

<br><br>
<div class="container">
  <h1 class="alert alert-warning text-center">Welcome to Photo Album <?php echo $_SESSION["username"] ?></h1>
</div>

<div class="container">
  <button class="btn btn-danger new-album-button"
    data-userid="<?php echo $_SESSION["userid"] ?>"
    data-name="Neues Album"
    data-descr="Ich bin ein neues Album">New Album</button>
</div>

<div class=" container">
  <div id="rel-album" class="container row">
    <?php require_once __DIR__ . "/../../../album/mvc/views/ajaxalbum.php"; ?>
  </div>
</div>
<br>

<script src="´../../../../../testproject/mails/src/album/ajax/CreateAlbumButton.js"></script>
<?php
require_once __DIR__ . "/footer.php";
require_once(__DIR__ . "/../../../app/design/footer.php");
?>