<?php
  $SETTINGS['db']['host'] = 'localhost';
  $SETTINGS['db']['port'] = 3306;  
  $SETTINGS['db']['name'] = 'owasp';
  $SETTINGS['db']['user'] = 'root';
  $SETTINGS['db']['pass'] = '';

  $SETTINGS['site_host'] = 'http://localhost:8888';
  $SETTINGS['site_path'] = '/security/owasp-gr4';
  $SETTINGS['site_url'] = $SETTINGS['site_host'] . $SETTINGS['site_path'];

  $PATH = $_SERVER['DOCUMENT_ROOT'] . $SETTINGS['site_path'];
?>
