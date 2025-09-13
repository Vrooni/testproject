<?php
function login(string $name, #[SensitiveParameter] string $password)
{
  throw new Exception("Cannot login");
}

try {
  login("user", "password");
} catch (Exception $e) {
  echo $e;
}
