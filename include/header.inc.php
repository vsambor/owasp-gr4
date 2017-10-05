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

  <link rel="stylesheet" href="http://localhost/security/owasp-gr4/css/style.css">
  <link rel="shortcut icon" href="http://localhost/security/owasp-gr4/img/favicon.ico" />
</head>

<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>