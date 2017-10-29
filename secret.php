<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';
  require_once $PATH . '/include/security.inc.php';
  $pageTitle = 'Secret';

  // Checks privilegies
  if($LOGGED_USER['role'] != 'secretholder') {
    header("Location: " . $SETTINGS['site_url'] . '/404.php');
    exit;
  }
  require_once $PATH . '/include/header.inc.php';
?>

<div class="page">
  <div>this is a fake secret! hahaha (try harder)</div>
</div>

<?php
  require_once $PATH . '/include/footer.inc.php';