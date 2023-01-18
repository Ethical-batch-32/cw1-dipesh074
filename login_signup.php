<?php

@include 'config.php';

session_start();

if(isset($_POST['login'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['admin'];
         header('location:teacher.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:fruit_after_login.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }
}
   if(isset($_POST['reg'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']);
    $cpass = ($_POST['cpassword']);
    // $user_type = "user";
 
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
       $error[] = 'user already exist!';
 
    }else{
 
       if($pass != $cpass){
          $error[] = 'password not matched!';
       }else{
          $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$pass')";
          mysqli_query($conn, $insert);
          // header('location:login_form.php');
          $error[] = 'You have been register successfully';
       }
    }
};

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login </title>
  <link rel="stylesheet" href="./login/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="" class="login" method="post">
            <div class="field">
              <input type="text" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form action="" class="signup" method="post">
            <div class="field">
              <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="field">
              <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="field">
              <input type="password" name="cpassword"placeholder="Confirm password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="reg" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>
<!-- partial -->
  <script  src="./login/script.js"></script>

</body>
</html>
