<?php
  include 'config.php';
  include '/include/start.inc.php';
  include '/include/security.inc.php';
  $pageTitle = 'Shop';

  include '/include/header.inc.php';

  if(get_GET('fwd')) {
    print(get_GET('fwd'));
      header("Location: " . $SETTINGS['root'] . get_GET('fwd'));
   }
?>

<div class="page">
  <form method="GET">
    <h3>Chess set - 100 $</h3>
    <input type="hidden" name="fwd" value="/shop_confirmation.php">
    <input type="submit" value="buy">
  <form>

</div>

<?php
  include '/include/footer.inc.php';