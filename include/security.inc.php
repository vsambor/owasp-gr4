<?php
if(!$LOGGED_USER) {
  header("Location: " . $SETTINGS['root'] . '/404.php');
  die("Redirecting to 404.php"); 
}