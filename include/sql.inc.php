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
  $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  return getDB()->query($query)->fetch(PDO::FETCH_ASSOC);
}

function getTable($table_name) {
  return getDB()->query("SELECT * FROM $table_name")->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Populates the the with 2 default user, with different roles.
 */
function populateDb() {
  // Adds secret user if it does not exist in the db.
  $secret_exist = getUser('secret@security.com', '123');
  if(!$secret_exist) {
    insertUser('secret@security.com', '123', 'secretholder', true);
  }

  // Adds simple user if it does not exist in the db.
  $user_exist = getUser('user@security.com', '123');
  if(!$user_exist) {
    insertUser('user@security.com', '123', 'user', true);
  }
}

?>
