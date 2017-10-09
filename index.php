<?php
  include 'config.php';
  include '/include/start.inc.php';
  $pageTitle = 'Home';
  include '/include/header.inc.php';
  
  // `test` contains all the users details from the db.
  $test = getTable('users');
?>

<div class="page">
  <h2><strong>Welcome <?=$LOGGED_USER ? $LOGGED_USER['email'] : '' ?> to OWASP Group 4</strong></h2>
</div>

<?php
  include '/include/footer.inc.php';