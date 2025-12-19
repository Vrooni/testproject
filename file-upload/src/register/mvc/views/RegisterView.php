<?php
require_once(__DIR__ . "/../../../app/design/header.php");
?>

<br> <br> <br>
<div class="container col col-6">
  <h1>Register</h1>
  <br>
  <form method="post">
    <div class="row">
      <div class="mb-3 col col-6">
        <label for="firstname" class="form-label">Firstname</label>
        <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname">
        <div id="firstnameHelp" class="form-text">Enter your first name.</div>
      </div>
      <div class="mb-3 col col-6">
        <label for="lastname" class="form-label">Lastname</label>
        <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" name="lastname">
        <div id="lastnameHelp" class="form-text">Enter your last name.</div>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
        <div id="usernameHelp" class="form-text">Which user name do you want?</div>
      </div>
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
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <p style="color: red"><?php echo $fail ?></p>
  </form>
</div>

<?php
require_once(__DIR__ . "/../../../app/design/footer.php");
?>