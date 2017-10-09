<?php
  $pageTitle  = isset($pageTitle) && $pageTitle ? 'OWASP | '.$pageTitle : 'OWASP';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$pageTitle?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?=$SETTINGS['root']?>/css/style.css">
  <link rel="shortcut icon" href="<?=$SETTINGS['root']?>/img/favicon.ico" />
</head>

<body>

<ul>
  <li><a href="<?=$SETTINGS['root']?>">Home</a></li>
  <?php if ($LOGGED_USER) { ?>
    <li><a href="<?=$SETTINGS['root']?>/secret.php">Top Secret</a></li>
  <?php } ?>

  <?php if (!$LOGGED_USER) { ?>
    <li style="float:right"><a href="<?=$SETTINGS['root']?>/register.php">Register</a></li>
    <li style="float:right"><a href="<?=$SETTINGS['root']?>/login.php">Login</a></li>
  <?php } else { ?>
    <li style="float:right"><a href="<?=$SETTINGS['root']?>/logout.php">Logout</a></li>
  <?php } ?>
</ul>