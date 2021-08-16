<?php 
    include("servercon.php");

    if(!isset($_SESSION['uname'])){
        header("location: index.php");
    }

    if(isset($POST['button_logout'])){
        session_destroy();
        header("location: index.php");
    }
    
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

    <title>Home Page</title>
  </head>
  <body>
    <h1>HOMEPAGE</h1>

    <form method='post' action="">
    <input type='submit' value="Logout" name ="button_logout" class= "btn btn-danger">
</form>
  </body>
</html>
