<?php
  include 'config.php';
  include '/include/start.inc.php';
  include '/include/security.inc.php';
  $pageTitle = 'Secret';

  // Checks privilegies
  if($LOGGED_USER['role'] != 'secretholder') {
    header("Location: " . $SETTINGS['root'] . '/404.php');
  }
  include '/include/header.inc.php';
?>

<div class="page">
  <div>Secret</div>
</div>

<?php
  include '/include/footer.inc.php';