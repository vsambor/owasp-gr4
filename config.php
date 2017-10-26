<?php
  
  /**
   * Database
   */
  $SETTINGS['db']['host'] = 'localhost';
  $SETTINGS['db']['port'] = 3306;  
  $SETTINGS['db']['name'] = 'owasp';
  $SETTINGS['db']['user'] = 'root';
  $SETTINGS['db']['pass'] = '';

  /**
   * Site paths
   */
  $SETTINGS['site_host'] = 'http://localhost';
  $SETTINGS['site_path'] = '/security/owasp-gr4';
  $SETTINGS['site_url'] = $SETTINGS['site_host'] . $SETTINGS['site_path'];
  $PATH = $_SERVER['DOCUMENT_ROOT'] . $SETTINGS['site_path'];

  /**
   * Cookies config.
   */
  $SESSION_COOKIE['lifetime'] = 1800; //seconds
  $SESSION_COOKIE['path'] = '/';
  $SESSION_COOKIE['domain'] = 'localhost';
  $SESSION_COOKIE['secure'] = isset($_SERVER["HTTPS"]);
  $SESSION_COOKIE['httponly'] = true;

?>
