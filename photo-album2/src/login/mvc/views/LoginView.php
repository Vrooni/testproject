<?php
require_once(__DIR__ . "/../../../app/design/header.php");
?>

<br><br><br>
<div class="container col col-6">
  <h1>Login</h1>
  <br>
  <form method="post">
    <div class="row">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">Enter you email address.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
        <div id="passwordHelp" class="form-text">Enter you password.</div>
      </div>
      <div class="mb-3 form-group form-check">
        <input type="checkbox" class="form-check-input" id="stay-in" name="stay-in" value="checked">
        <label class="form-check-label" for="stay-in">Stay in</label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Login</button>
    <p style="color: red"><?php echo $fail ?></p>
  </form>
</div>

<?php
require_once(__DIR__ . "/../../../app/design/footer.php");
?>