<?php 
  include "config.php";
  include $PATH.'/include/start.inc.php';

  unset($_SESSION['user']);
  $LOGGED_USER = '';

  header("Location: index.php"); 
  die("Redirecting to: index.php");
?>