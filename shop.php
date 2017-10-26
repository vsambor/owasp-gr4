<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';
  require_once $PATH . '/include/security.inc.php';
  $pageTitle = 'Shop';

  require_once $PATH . '/include/header.inc.php';
  
  if(get_GET('fwd')) {
      header("Location: " . $SETTINGS['site_url'] . '/' . get_GET('fwd'));
      exit;
   }
?>

<div class="page">
  <form method="GET">
    <h3>Chess set - 100 $</h3>
    <input type="hidden" name="fwd" value="shop_confirmation.php">
    <input type="submit" value="buy">
  <form>

</div>

<?php
  require_once $PATH . '/include/footer.inc.php';