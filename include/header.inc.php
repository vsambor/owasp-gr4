<?php
  $metaTitle  = isset($metaTitle) && $metaTitle ? 'OWASP | '.$metaTitle : 'OWASP';
  $uri = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="ro">
<head>
  <title><?=$metaTitle?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?=$SETTINGS['site_url']?>/css/style.css">
  <link rel="stylesheet" href="<?=$SETTINGS['site_url']?>/css/login.css">
</head>

<body>

HEADER TO DO