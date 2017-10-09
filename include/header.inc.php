<?php
  $metaTitle  = isset($metaTitle) && $metaTitle ? 'OWASP | '.$metaTitle : 'OWASP';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$metaTitle?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?=$SETTINGS['root']?>/css/style.css">
  <link rel="shortcut icon" href="<?=$SETTINGS['root']?>/img/favicon.ico" />
</head>

<body>

<ul>
  <li><a href="<?=$SETTINGS['root']?>">Home</a></li>
  <li><a href="<?=$SETTINGS['root']?>/secret.php">Top Secret</a></li>
  <li style="float:right"><a href="<?=$SETTINGS['root']?>/register.php">Register</a></li>
  <li style="float:right"><a href="<?=$SETTINGS['root']?>/login.php">Login</a></li>
  <li style="float:right"><a href="<?=$SETTINGS['root']?>/logout.php">Logout</a></li>
</ul>