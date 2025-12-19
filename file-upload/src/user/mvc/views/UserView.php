<?php
require_once(__DIR__ . "/../../../app/design/header.php");
?>

<h3><?php echo $user["username"] ?></h3>
<p><?php echo $user->mail ?></p>
<p><?php echo $user->bio ?></p>
<p><?php echo $user->get_str_len($user->bio) ?></p>
<p><?php echo $age ?></p>

<?php
require_once(__DIR__ . "/../../../app/design/footer.php");
?>