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

/**
 * Checks if user is of provided role type.
 */
function isRole($role) {
  global $LOGGED_USER;
  switch($role) {
    case 'admin':
      return $LOGGED_USER && $LOGGED_USER['role'] == 'admin';
    case 'secretholder':
      return ($LOGGED_USER && $LOGGED_USER['role'] == 'secretholder');
    case 'user':
      return $LOGGED_USER && $LOGGED_USER['role'] == 'user';
  }
}

?>
