<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';
  $pageTitle = 'Change Password';
  require_once $PATH . '/include/header.inc.php';

  // Erros holder.
  $errors = '';

  // Infos holder.
  $info = '';
  
  // When the form is submitted then this code is executed.
  if(get_GET('action')) {
    $email = get_GET('email');
    $password = get_GET('password');

    // Try to login.
    $isChanged = changeUserPassword($email, $password);

    if($isChanged) {
      $info = 'The password has been successfully updated.';
    } else {
      $errors = 'Password couldn\'t be changed. Please try again.';
    }
  }
?>

<div class="page">

  <!-- Errors -->
  <h5><font color="red"><?=$errors?></font></h5>

  <!-- Info -->
  <h5><font color="green"><?=$info?></font></h5>

  <h3 style="text-align: center;">Change Users Password</h3>

  <!-- Change Password Form -->
  <form method="GET">
  <input type="hidden" name="action" value="1">
    <label><b>Email</b></label>
    <input type="email" placeholder="Email..." name="email" class="form-control form-group" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Password..." name="password" class="form-control form-group" required>
    <button type="submit" class="btn btn-md btn-danger btn-block">Login</button>
  </form>
</div>

<?php
  require_once $PATH . '/include/footer.inc.php';