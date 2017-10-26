<?php

ob_start();

session_set_cookie_params(
  $SESSION_COOKIE['lifetime'],
  $SESSION_COOKIE['path'],
  $SESSION_COOKIE['domain'],
  $SESSION_COOKIE['secure'],
  $SESSION_COOKIE['httponly']
);
session_start();

require_once $PATH . '/include/db.inc.php';
require_once $PATH . '/include/functions.inc.php';
require_once $PATH . '/include/sql.inc.php';

$LOGGED_USER = (isset($_SESSION['user']) && (isset($_SESSION['user']['id']))) ? $_SESSION['user'] : '';

populateDb();