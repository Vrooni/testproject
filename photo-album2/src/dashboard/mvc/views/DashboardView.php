<?php require_once __DIR__ . "/../../../App/Design/header.php" ?>
<?php require_once __DIR__ . "/navbar.php" ?>
<br>
<br>
<br>
<div class="container">
  <h1 class="alert alert-warning text-center">Welcome to Dashboard <?php echo $_SESSION["username"] ?></h1>
</div>
<br><br>
<br><br>
<div class="container">
  <div class="row align-items-start">
    <div class="col">
      <div class="card">
        <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" style="padding: 10px; margin: auto" width="100" height="100" alt="">
        <div class="card-body">
          <h5 class="card-title">Zu deinen Fotos</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="/Album" class="btn btn-primary">Zu den Fotos</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" style="padding: 10px; margin: auto" width="100" height="100" alt="">
        <div class="card-body">
          <h5 class="card-title">Zu deinem Profil</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="#" class="btn btn-primary">Zum Profil</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" style="padding: 10px; margin: auto" width="100" height="100" alt="">
        <div class="card-body">
          <h5 class="card-title">Settings</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
          <a href="#" class="btn btn-primary">Zu den Settings</a>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<br><br>
<br><br>
<?php require_once __DIR__ . "/footer.php" ?>
<?php require_once __DIR__ . "/../../../App/Design/footer.php" ?>