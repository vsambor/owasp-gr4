<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/security/owasp-gr4/config.php';
  require_once $PATH . '/include/start.inc.php';
  require_once $PATH . '/include/security.inc.php';
  $pageTitle = 'Profile';
  require_once $PATH . '/include/header.inc.php';

  // Infos holder.
  $info = '';

  // Erros holder.
  $errors = '';
  
  // When the form is submitted then this code is executed.
  if(get_POST('action')) {
    $email = get_POST('email');
    $password = get_POST('password');
    $password_confirm = get_POST('password_confirm');

    // Checks if passwords match.
    if($password != $password_confirm) {
      $errors .='<br>The passwords do not match.';
    } else {
      $is_changed = changeUserPassword($email, $password);
      
      if($is_changed) {
        $info = 'The password has been successfully changed.';
      } 
    }
  }
?>


<div class="page">

  <!-- Info -->
  <h5><font color="green"><?=$info?></font></h5>

  <!-- Errors -->
  <h5><font color="red"><?=$errors?></font></h5>

  <h3 style="text-align: center;">Reset Password</h3>

  <!-- password recovery form -->
  <form method="POST">
    <input type="hidden" name="action" value="1">
    <input type="hidden" name="email" value="<?=$LOGGED_USER['email']?>">

    <label><b>New Password</b></label>
    <input type="password" name="password">
    <label><b>Password confirmation</b></label>
    <input type="password" name="password_confirm">

    <button type="submit" class="btn btn-md btn-danger btn-block">Reset</button>
  </form>
</div>

<?php
  require_once $PATH . '/include/footer.inc.php';