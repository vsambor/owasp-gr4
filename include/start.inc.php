<?php

session_start();
require_once '/include/db.inc.php';
require_once '/include/functions.inc.php';
require_once '/include/sql.inc.php';

 $LOGGED_USER = (isset($_SESSION['user']) && (isset($_SESSION['user']['id']))) ? $_SESSION['user'] : '';
 populateDb();