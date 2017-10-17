<?php

/**
 * Gets database connection over PDO driver.
 */
function getDB() {
  global $dataBase;
  
  if($dataBase == null) {
    $dataBase = new DataBase();
  }

  return $dataBase->getConnection();
}

/**
 * Inserts an user into database.
 */
function insertUser($email, $password, $role="user", $is_valid=true) {
  $db = getDB();
  $query = "INSERT INTO users (email, password, role, is_valid) VALUES (:email, :password, :role, :is_valid)";
  $stmt = $db->prepare($query); 
  $stmt->execute([':email'=> $email, ':password' => encryptPassword($password), ':role' => $role, ':is_valid' => $is_valid]);
  return $db->lastInsertId();
}

/**
 * Gets a single user from db by email and password.
 */
function getUser($email, $password) {
  $db = getDB();
  $query = "SELECT * FROM users WHERE email=:email AND password=:password";
  $stmt = $db->prepare($query);
  $stmt->execute([':email' => $email, ':password' => encryptPassword($password)]);
  return $stmt->fetch(PDO::FETCH_ASSOC);
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
