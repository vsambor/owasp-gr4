<?php 
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';

  unset($_SESSION['user']);
  $LOGGED_USER = '';

  header("Location:" . $SETTINGS['site_url']);
  exit;
?>