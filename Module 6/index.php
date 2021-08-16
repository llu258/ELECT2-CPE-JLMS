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

    <title>Home Page</title>
  </head>
  <body>
    <br><br><h1 align="center">HOMEPAGE</h1>
  
    <div align = "center">
    <form name="homepage" method='post' action="">
    <br><input type="submit" class="btn btn-info" name="emplinfo" formaction="/elect3_bscoe3_jlms/Module%206/create.php" value="Add Employee Information"> 
   <input type="submit" class="btn btn-info" name="searchrecord" formaction="/elect3_bscoe3_jlms/Module%206/retrieve.php" value="Find Records">
   <input type="submit" class="btn btn-secondary" name="exitpage" formaction="/elect3_bscoe3_jlms/Module%206/exit.php" value="Go to Exit"></div>
</form>
  </body>
</html>