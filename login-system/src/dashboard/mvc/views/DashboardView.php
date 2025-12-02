<?php require_once __DIR__ . "/../../../App/Design/header.php" ?>
<br>
<br>
<br>
<div class="mb-3 container clearfix">
  <div>
    <a class="float-end" href="/Logout"><button class="btn btn-secondary">Logout</button></a>
  </div>
</div>
<div class="container">
  <h1 class="alert alert-warning text-center">Welcome to Dashboard <?php echo $_SESSION["username"] ?></h1>
</div>

<?php require_once __DIR__ . "/../../../App/Design/footer.php" ?>