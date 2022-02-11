<?php
require './../lib/functions.php';
  // var_dump($_SERVER);
  // die();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //POST values
  if(isset($_POST['username'])){
    $username=$_POST['username'];//if it has data then attached the value to the variable
  }else {
    $username= ''; //else make the variable blank
  }
  if(isset($_POST['firstname'])){
    $firstname=$_POST['firstname'];//if it has data then attached the value to the variable
  }else {
    $firstname= ''; //else make the variable blank
  }
  if(isset($_POST['lastname'])){
    $lastname=$_POST['lastname'];//if it has data then attached the value to the variable
  }else {
    $lastname= ''; //else make the variable blank
  }
  if(isset($_POST['email'])){
    $email= $_POST['email'];
  }else {
    $email='';
  }
  if(isset($_POST['Password'])){
    $password= $_POST['Password'];
  }else {
    $password= '';
  }
  save_to_db($username,$firstname,$lastname,$email,$password);
  header('location:login.php'); //redirects the user to the sign in page.
  // var_dump($_POST);
  // die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I-Shop| Sign Up</title>
  <!-- Favicon -->
  <!-- Bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="shortcut icon" href="./../img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./../css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Sign In</h1>
    <p class="sign-up__subtitle">Get Started by experiencing value added shopping through the eyes of AR.This is the next Gen Shopping.</p>
    <form class="sign-up-form form" action="./signup.php" method="POST">
    <!-- Snack Bar error pop up -->
      <label class="form-label-wrapper">
        <p class="form-label">User Name</p>
        <input class="form-input" type="text" id="nme" name='username' placeholder="Enter your User name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">First Name</p>
        <input class="form-input" type="text" name='firstname' placeholder="Enter your First name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Last Name</p>
        <input class="form-input" type="text" name='lastname' placeholder="Enter your Last name" required>
      </label>
      <!-- <label class="form-label-wrapper">
        <p class="form-label">Phone Number</p>
        <input class="form-input" type="number" placeholder="Enter your Phone number" required>
      </label> -->
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" name='email'  id='emailinput'  placeholder="Enter your Email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name='Password' id="pwd" placeholder="Enter your Password" required>
      </label>
      <div class ="col-12">
          <p class="sign-up__subtitle">Click the eye to make passwords visible <i class="bi bi-eye-slash" id='togglePassword'></i>
        </div>
      <label class="form-label-wrapper">
        <p class="form-label">Confirm Password</p>
        <input class="form-input" type="password" name='ConfirmPassword' id='confirmpassword' placeholder="Re-type your Password" required>
      </label>
      <!-- <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" required>
        <span class="form-checkbox-label">Remember me next time</span>
      </label> -->
      <button class="form-btn primary-default-btn transparent-btn" type="submit">Sign in</button>
<br>
      <div class="row my-3">
        <div class="col"><hr></div>
        <div class="sign-up__subtitle ">Already have an Account? <a class="link-info forget-link" href="./../index.php?page=login"> Login</a></div>
        <div class="col"><hr></div>
      </div>
    </form>
        
    
  
  </article>
</main>
<script lang="javascript">
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pwd');
  const ConfirmPasswordpwd = document.querySelector('#confirmpassword');
  //Password toggle function
  togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      const type2 = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      ConfirmPasswordpwd.setAttribute('type', type2);
      // toggle the eye / eye slash icon
      this.classList.toggle('bi-eye');
  });

</script>
<!-- Chart library -->
<script src="./../plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="./../plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="./../js/script.js"></script>
</body>

</html>