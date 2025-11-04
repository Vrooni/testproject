<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=users;charset=utf8", "root", "");
} catch (Exception $e) {
  echo "Unable to connect to database: " . $e->getMessage();
  return;
}

function get_user($userid)
{
  global $pdo;
  return $pdo->query("SELECT * FROM users WHERE userid = '$userid'");
}

function get_users()
{
  global $pdo;
  return $pdo->query("SELECT * FROM users");
}

function create_user()
{
  global $pdo;
  return $pdo->query("INSERT INTO users (username, mail, password) VALUES ('Herbert', 'herbert@test.de', 'e456')");
}

function delete_user()
{
  global $pdo;
  return $pdo->query("DELETE FROM users WHERE username = 'Herbert'");
}

function update_user()
{
  global $pdo;
  return $pdo->query("UPDATE users SET password = 'new 234t' WHERE userid = 1");
}
