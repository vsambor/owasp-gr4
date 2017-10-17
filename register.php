<?php
  include 'config.php';
  include '/include/start.inc.php';
  $pageTitle = 'Register';
  include '/include/header.inc.php';

  // Erros holder.
  $errors = '';

  // When the form is submitted then this code is executed.
  if(get_POST('action')) {
    $email = get_POST('email');
    $password = get_POST('password');
    $confim_password = get_POST('confirm_password');

    // Checks if passwords match.
    if($password != $confim_password) {
      $errors .='<br>The passwords do not match.';
    } else {
      insertUser($email, $password);
      header("Location: " . $SETTINGS['root'] . "/login.php");
    }
  }
?>

<div class="page">

  <!-- Errors -->
  <h5><font color="red"><?=$errors?></font></h5>

  <!-- Register Form -->
  <form method="POST">
    <input type="hidden" name="action" value="1">

    <label><b>Email</b></label>
    <input type="email" placeholder="Email..." name="email" class="form-control form-group" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Password..." name="password" class="form-control form-group" required>

    <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password..." name="confirm_password" class="form-control form-group" required>
    <button type="submit" class="btn btn-md btn-danger btn-block">Register</button>
  </form>
</div>

<?php
  include '/include/footer.inc.php';