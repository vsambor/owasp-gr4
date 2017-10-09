<?php
  include 'config.php';
  include '/include/start.inc.php';
  $metaTitle = 'Home';
  include '/include/header.inc.php';
?>

<div class="page">
  <form method="POST" action="" style="padding-top:20px;">
    <input type="hidden" name="a" value="1">
    <input type="text" placeholder="First & Last Name..." name="name" class="form-control form-group" required>
    <input type="email" placeholder="Email..." name="email" class="form-control form-group" required>
    <input type="password" placeholder="Password..." name="pass1" class="form-control form-group" required>
    <input type="password" placeholder="Confirm Password..." name="pass2" class="form-control form-group" required>
    <button type="submit" class="btn btn-md btn-danger btn-block">Register</button>
  </form>
</div>

<?php
  include '/include/footer.inc.php';