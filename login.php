<?php
  include 'config.php';
  include '/include/start.inc.php';
  $pageTitle = 'Login';
  include '/include/header.inc.php';

  // Erros holder.
  $errors = '';
  
  // When the form is submitted then this code is executed.
  if(get_POST('action')) {
    $email = get_POST('email');
    $password = get_POST('password');

    // Checks if email is valid.
    if(!isEmailValid($email)) {
      $errors = 'The email is invalid.';
    } else {

      $user = login($email, $password);

      if($user) {
        // For security reason.
        unset($user['password']); 

        // Saves the user in session, that means he is logged in.
        $_SESSION['user'] = $user;

        // Redirects to home.
        header("Location: " . $SETTINGS['root']);
      } else {
        $errors = 'Login failed. Please try again.';
      }
    }
  }
?>

<div class="page">

  <!-- Errors -->
  <h5><font color="red"><?=$errors?></font></h5>

  <!-- Login Form -->
  <form method="POST">
  <input type="hidden" name="action" value="1">
    <label><b>Email</b></label>
    <input type="email" placeholder="Email..." name="email" class="form-control form-group" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Password..." name="password" class="form-control form-group" required>
    <button type="submit" class="btn btn-md btn-danger btn-block">Login</button>
  </form>
</div>

<?php
  include '/include/footer.inc.php';
