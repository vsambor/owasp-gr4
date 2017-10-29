<?php

function getDB() {
  global $dataBase;
  
  if($dataBase == null) {
    $dataBase = new DataBase();
  }

  return $dataBase->getConnection();
}

function insertUser($email, $password, $role="user", $valid=true) {
  $query = "INSERT INTO users (email, password, role, is_valid) 
    VALUES ('$email', '" .encryptPassword($password)."', '$role', '$valid')";
  return getDB()->query($query);
}

function getUser($email, $password) {
  $query = "SELECT * FROM users WHERE email='$email' AND password='".encryptPassword($password)."'";
  return getDB()->query($query)->fetch(PDO::FETCH_ASSOC);
}

function getUserByEmail($email) {
  $query = "SELECT * FROM users WHERE email='$email'";
  return getDB()->query($query)->fetch(PDO::FETCH_ASSOC);
}

function getTable($table_name) {
  return getDB()->query("SELECT * FROM $table_name")->fetchAll(PDO::FETCH_ASSOC);
}

function changeUserPassword($email, $password) {
  return getDB()->query("UPDATE users SET password='".encryptPassword($password)."' WHERE email='" . $email ."'");
}

function isSecretKeyGood($key) {
  if($key == 'smart') {
    return true;
  }
  return false;
}

/**
 * Populates the the with 2 default user, with different roles.
 */
function populateDb() {
  // Adds admin user if it does not exist in the db.
  if(!getUserByEmail('admin@security.com')) {
    insertUser('admin@security.com', '123', 'admin', true);
  }

  // Adds secret user if it does not exist in the db.
  if(!getUserByEmail('secret@security.com')) {
    insertUser('secret@security.com', '123', 'secretholder', true);
  }

  // Adds simple user if it does not exist in the db.
  if(!getUserByEmail('user@security.com')) {
    insertUser('user@security.com', '123', 'user', true);
  }
}

?>
