<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';
  require_once $PATH . '/include/security.inc.php';
  $pageTitle = 'Profile';
  require_once $PATH . '/include/header.inc.php';
?>

<div class="page">

  <h3 style="text-align: center;">Profile</h3>

  <p><b>email:</b> <?=$LOGGED_USER['email']?> </p>
  <p><b>role:</b> <?=$LOGGED_USER['role']?> </p>

  <?php if ($LOGGED_USER && $LOGGED_USER['role'] == 'admin') { ?>
    <a href="<?=$SETTINGS['site_url']?>/change-password.php">Change users password</a> <br><br>
  <?php } ?>

  <a href="<?=$SETTINGS['site_url']?>/reset-password.php">Reset Password</a>

</div>

<?php
  require_once $PATH . '/include/footer.inc.php';