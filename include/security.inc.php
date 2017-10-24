<?php
if(!$LOGGED_USER) {
  header("Location: " . $SETTINGS['site_url'] . '/404.php');
  die("Redirecting to 404.php"); 
}