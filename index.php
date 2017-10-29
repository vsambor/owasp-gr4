<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';
  $pageTitle = 'Home';
  require_once $PATH . '/include/header.inc.php';

  // When the form is submitted then this code is executed.
  if(get_POST('action')) {
    $HOLLY_KEY = get_POST("HOLLY_KEY");
  }
?>

<div class="page">

  <h2>
    <strong>Welcome <?=$LOGGED_USER ? $LOGGED_USER['email'] : '' ?> to OWASP Group 4</strong> <br><br>
    <span style="color:red">____BROKEN version____ </span>
  </h2>

  <br><br><br>

  <?php 
  if(isRole('secretholder')) {
    if(!isSecretKeyGood($HOLLY_KEY)) { ?>
      <form method="POST">
        <input type="hidden" name="action" value="1">
        <input type="text" name="HOLLY_KEY">
        <input type="submit" value="Show Secret">
      </form>
  <?php } else { ?>
    <div id="secret">BRAVO! you just steal one point from our grade... :( </div>
  <?php }} ?>

</div>

<?php
  require_once $PATH . '/include/footer.inc.php';