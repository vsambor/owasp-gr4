<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';
  require_once $PATH . '/include/security.inc.php';
  $pageTitle = 'Shop';

  require_once $PATH . '/include/header.inc.php';

  if(get_POST('action')) {
    header("Location: " . $SETTINGS['site_url'] . '/shop_confirmation.php');
    exit;
  }
?>

<div class="page">
  <form method="POST">
    <h3>Chess set - 100 $</h3>
    <input type="hidden" name="action" value="1">
    <input type="submit" value="buy">
  <form>

</div>

<?php
  require_once $PATH . '/include/footer.inc.php';