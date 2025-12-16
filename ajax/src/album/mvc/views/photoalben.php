<?php require_once __DIR__ . "/../../../App/Design/header.php"?>
<!--Navbar from UserDashboard-->
<?php require_once __DIR__ . "/../../../UserDashboard/MVC/Views/Elements/navbar.php"?>
<br>
<br>
<div class="container">
    <h1 class="alert alert-warning text-center">Deine Foto-Alben <?php echo $_SESSION["username"] ?></h1>
</div>
<br>
<br>
<div class="container">
    <button class="btn btn-danger newAlbumAjaxButton"
            data-albumname="Neues Album"
            data-albumdescription="Ich bin ein neues Album"
            data-userid="<?php echo $_SESSION['userid'] ?>">Neues Album
    </button>
</div>
<br>
<br>
<br>
<div class="container">
    <div id="relPhotoalben" class="container row">
        <?php require_once __DIR__ . "/../../../PhotoAlben/MVC/Views/AjaxPhotpAlben.php"?>
    </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script src="../../../../../Testus/mainsrc/PhotoAlben/MVC/AjaxPhotoAlben/AjaxNewAlbumButton.js"></script>
<!--Footer from UserDashboard-->
<?php require_once __DIR__ . "/../../../UserDashboard/MVC/Views/Elements/footer.php"?>
<?php require_once __DIR__ . "/../../../App/Design/footer.php"?>
