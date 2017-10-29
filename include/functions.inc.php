<?php

function get_POST($var) {
  return filter_input(INPUT_POST, $var);
}

function get_GET($var) {
  return filter_input(INPUT_GET, $var);
}

function encryptPassword($password) {
  $salt = 'tp3wzow16k';
  return hash('sha256', $password . $salt);
}

function checkPrivileges() {
  if(!$_SESSION['user']) {
    header('Location: login.php');
    exit;
  }
}

function isEmailValid($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isPasswordValid($password, &$error){
   if(strlen($password) < 6){
      $error = "Password must be at least 6 characters";
      return false;
   }
  
   if (!preg_match('`[a-z]`',$password)){
      $error = "Password must have at least one lower case letter";
      return false;
   }
   if (!preg_match('`[A-Z]`',$password)){
      $error = "Password must have at least one uppercase letter";
      return false;
   }
   if (!preg_match('`[0-9]`',$password)){
      $error = "Password must have at least one numeric character";
      return false;
   }
   $error = "";
   return true;
} 

?>
