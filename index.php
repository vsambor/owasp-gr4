<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';
  $pageTitle = 'Home';
  require_once $PATH . '/include/header.inc.php';
?>

<div class="page">

  <h2>
    <strong>Welcome <?=$LOGGED_USER ? $LOGGED_USER['email'] : '' ?> to OWASP Group 4</strong> <br><br>
    <span style="color:red">____BROKEN version____ </span>
  </h2>

  <?php if ($LOGGED_USER && $LOGGED_USER['role'] == 'secretholder') { ?>
    <div id="secret">Secret</div>
  <?php } ?>

</div>

<?php
  require_once $PATH . '/include/footer.inc.php';