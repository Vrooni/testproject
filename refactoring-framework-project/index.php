<?php
require_once("init.php");

$user_db = $user_container->build("user_data_base");
$users = $user_db->get_users();
?>

<div class="users-container">
  <?php foreach ($users as $user): ?>
    <a href="profile.php?userid=<?php echo $user["userid"]; ?>">
      <h3><?php echo $user["username"]; ?></h3>
    </a>
  <?php endforeach ?>
</div>