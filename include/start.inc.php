<?php

session_start();
require_once '/include/db.inc.php';
require_once '/include/functions.inc.php';
require_once '/include/sql.inc.php';

// $logged  = (isset($_SESSION['user']) && !empty($_SESSION['user']) && (isset($_SESSION['user']['id']))) ? true : false;
// $USER_ID = isset($_SESSION['user']['id']) && $_SESSION['user']['id'] ? $_SESSION['user']['id'] : '';
// $MAX_FILE_SIZE = 5000000; //5 mb