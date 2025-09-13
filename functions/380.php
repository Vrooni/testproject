<?php
function createUser($name, $email, $role = "subscriber")
{
  echo "name: $name<br>";
  echo "email: $email<br>";
  echo "role: $role<br><br>";
}

createUser("Markus", "test@web.de");
createUser(role: "admin", email: "test@web.de", name: "Markus");
