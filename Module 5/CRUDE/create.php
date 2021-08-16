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

    <title>Create Customer Records</title>
  </head>

  <body>
    <h1>Create Customer Records</h1>

   <form name="createrecords" action="<?php $_PHP_SELF ?>" method="post">
    <div class="col-xs-10">
    <div align="left">
   <input type="submit" class="btn btn-primary" name="createrecord" value="Add Records">
   </div>
        <label class="form-label">Name </label>
        <input type="text" class="form-control" name="displayname">
        <label class="form-label">E-mail Address </label>
        <input type="text" class="form-control" name="emailaddress">
    </div>
</form>
  </body>
</html>
<?php
if(isset($_POST['createrecord']))
{
    $Display_Name = $_POST['displayname'];
    $emailadd = $_POST['emailaddress']; 

    $sqlstring = "INSERT INTO tblinfo (name, email) VALUES ('$Display_Name', '$emailadd')"; 
  
    
    if(mysqli_query($dbconnect, $sqlstring)){
        echo "New record created <br>";
        $result = mysqli_num_rows($dbconnect);
        
    } else 
    {
        echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
    }
   
    mysqli_close($dbconnect);

}

?>
