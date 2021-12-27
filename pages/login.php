<?php
require './../lib/functions.php';

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  //checks if you are an admin or not
  if($_SESSION['usertype'] === 'admin'){
    header('location:index.php?page=adminDash');
    exit;
  }else{
    header('location:index.php?page=userDash');
    exit;
  }

}
//we want to read from our db and verify if the data we receive is true. 

// $date = getdate(); //footer date -will be moved to the footer section.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['emailinput'])) { //if those particular arrays exist then assign the appropriate variables their values.
      $email = $_POST['emailinput'];
  } else {
      $email = '';
  }
  if (isset($_POST['passwordinput'])) {
      $password = $_POST['passwordinput'];
  } else {
      $password = '';
  }
 login_db($email, $password);

  // var_dump($password , $email);die();
}
// if(isset($_POST['']))

// var_dump($date);die();




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I-Shop | Login </title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./../img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./../css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Welcome back!</h1>
    <p class="sign-up__subtitle">Sign in to your account to continue</p>
    <form class="sign-up-form form" action="./login.php" method="POST">
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" name="emailinput" placeholder="Enter your email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name="passwordinput" placeholder="Enter your password" required>
      </label>
      <a class="link-info forget-link" href="##">Forgot your password?</a>
      <!-- <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" required>
        <span class="form-checkbox-label">Remember me next time</span>
      </label> -->
      <button class="form-btn primary-default-btn transparent-btn">Sign in</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="./../plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="./../plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="./../js/script.js"></script>
</body>

</html>