<?php

function buildQueryParams(array $arr, $init='') {
  $new_arr = array();
  foreach($arr as $key => $value) {
    $new_arr[':'.$init.$key] = $value;
  }
  return $new_arr;
}

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
  return filter_var($email, FILTER_VALIDATE_EMAIL) ? 1 : 0;
}
