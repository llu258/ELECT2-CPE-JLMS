<?php
include('servercon.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
    <h1 align = "center">Registration</h1>
<form name="register" action="<?php $_PHP_SELF ?>" method="post"> 

<div class="container">
  <div class="mb-3">
  <input type="text" class="form-control"  name="p_username" placeholder="Username">
  </div>
  <div class="mb-3">
  <input type="text" class="form-control"  name="p_email" placeholder="E-Mail Address">
  </div>
  <div class="mb-3">
  <input type="password" class="form-control"  name="p_password" placeholder="Password">
  </div>
  <div class="mb-3">
  <label class="form-label">Already have an account? </label>
  <input type="submit"class="btn btn-info" name="searchrecord" formaction = "/elect3_bscoe3_jlms/Module%205/LOGIN/login.php" value="Login Here">
  </div>
  <div class="mb-3">
  <input type="submit" class="btn btn-primary"  name="registeruser" value="Register Now">
  </div>
  
</div>
</form></body></html>


<?php

if(isset($_POST['registeruser']))
{

  $username = $_POST['p_username'];
  $emailadd = $_POST['p_email'];
  $pass = $_POST['p_password'];
  $md5pass = md5($pass);

$sqlstring = "INSERT INTO users (username, email, password) VALUES('$username','$emailadd','$md5pass')"; 

$queryresult = mysqli_query($dbconnect, $sqlstring);

if(mysqli_query($dbconnect, $sqlstring)){

    header('Location: login.php');
} else{
  echo "Unable to execute the query. Error code " . mysqli_error($dbconnect);
}
mysqli_close($dbconnect);


}
?>




