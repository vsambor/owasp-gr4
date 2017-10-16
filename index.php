<?php
  include 'config.php';
  include '/include/start.inc.php';
  $pageTitle = 'Home';
  include '/include/header.inc.php';
  
?>

<div class="page">

  <h2><strong>Welcome <?=$LOGGED_USER ? $LOGGED_USER['email'] : '' ?> to OWASP Group 4</strong></h2>

  <?php if ($LOGGED_USER && $LOGGED_USER['role'] == 'secretholder') { ?>
    <div id="secret">Secret</div>
  <?php } ?>

</div>

<?php
  include '/include/footer.inc.php';