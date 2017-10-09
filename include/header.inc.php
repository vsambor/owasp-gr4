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
  <li><a href="http://localhost/security/owasp-gr4/">Home</a></li>
  <li><a href="http://localhost/security/owasp-gr4/secret.php">Top Secret</a></li>
  <li style="float:right"><a href="http://localhost/security/owasp-gr4/register.php">Register</a></li>
  <li style="float:right"><a href="http://localhost/security/owasp-gr4/login.php">Login</a></li>
  <li style="float:right"><a href="http://localhost/security/owasp-gr4/logout.php">Logout</a></li>
</ul>