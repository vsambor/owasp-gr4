<?php
  $pageTitle  = isset($pageTitle) && $pageTitle ? 'OWASP | '.$pageTitle : 'OWASP';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$pageTitle?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?=$SETTINGS['site_url']?>/css/style.css">
  <link rel="shortcut icon" href="<?=$SETTINGS['site_url']?>/img/favicon.ico" />
</head>

<body>

<ul>
  <li><a href="<?=$SETTINGS['site_url']?>">Home</a></li>

  <?php if ($LOGGED_USER) { ?>
    <li><a href="<?=$SETTINGS['site_url']?>/shop.php">Shop</a></li>

    <?php if ($LOGGED_USER && $LOGGED_USER['role'] == 'secretholder') { ?>
      <li><a href="<?=$SETTINGS['site_url']?>/secret.php">Top Secret</a></li>
    <?php } ?>

  <?php } ?>

  <?php if (!$LOGGED_USER) { ?>
    <li style="float:right"><a href="<?=$SETTINGS['site_url']?>/register.php">Register</a></li>
    <li style="float:right"><a href="<?=$SETTINGS['site_url']?>/login.php">Login</a></li>
  <?php } else { ?>
    <li style="float:right"><a href="<?=$SETTINGS['site_url']?>/logout.php">Logout</a></li>
  <?php } ?>
</ul>