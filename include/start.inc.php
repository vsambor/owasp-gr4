<?php

session_start();
require_once $PATH.'/include/db.inc.php';
require_once $PATH.'/include/functions.inc.php';
require_once $PATH.'/include/sql.inc.php';

getSettings();

$logged  = (isset($_SESSION['user']) && !empty($_SESSION['user']) && (isset($_SESSION['user']['id']))) ? true : false;
$USER_ID = isset($_SESSION['user']['id']) && $_SESSION['user']['id'] ? $_SESSION['user']['id'] : '';
$MAX_FILE_SIZE = 5000000; //5 mb

$USER_LEVEL = [
    1 => 'Admin',
    2 => 'User'
];

$USER_STATUS = [
    0 => 'Inactive',
    1 => 'Active'
];

$BRANCH_STATUS = [
    1 => 'active',
    2 => 'lost',
    3 => 'won'
];