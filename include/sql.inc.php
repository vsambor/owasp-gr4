<?php

function getDB() {
  global $dataBase;
  
  if($dataBase == null) {
    $dataBase = new DataBase();
  }

  return $dataBase->getConnection();
}

function getUserByEmail($email) {
  return getDB()->query("SELECT * FROM users WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
}

function getTable($table_name) {
  return getDB()->query("SELECT * FROM $table_name")->fetchAll(PDO::FETCH_ASSOC);
}

function login($email, $password) {
  $user = getUserByEmail($email);
  return encryptPassword($password) === $user['password'] ? $user : '';
}

?>
