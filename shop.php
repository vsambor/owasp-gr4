<?php
  include 'config.php';
  include '/include/start.inc.php';
  include '/include/security.inc.php';
  $pageTitle = 'Shop';

  include '/include/header.inc.php';

  if(get_POST('action')) {
    header("Location: " . $SETTINGS['root'] . '/shop_confirmation.php');
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
  include '/include/footer.inc.php';