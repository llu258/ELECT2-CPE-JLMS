<?php 
include('servercon.php');
?>

<?php
    if(isset($_POST['updaterecord'])){

      $emp_id =$_POST['displayid'];
      $Display_Name = $_POST['displayname'];
      $emailadd = $_POST['emailaddress'];

      $sqlstring = "UPDATE tblinfo SET name='$Display_Name' , email='$emailadd' WHERE id = '$emp_id'";
 
      if(mysqli_query($dbconnect, $sqlstring)){
        echo "New record updated <br>";
        
    } else 
    {
        echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
    }
   
    mysqli_close($dbconnect);
  }

?>
    

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Update Records</title>
  </head>
  <body>
    <h1>Update Records</h1>

    <?php 
    if(isset($_GET['update_id'])){
      $e_id = $_GET['update_id'];
      $sqlstring = mysqli_query($dbconnect, "SELECT * FROM tblinfo WHERE id = '$e_id'");
      $r = mysqli_fetch_array($sqlstring);

      $name = $r['name'];
      $emailadd = $r['email'];
    }
    ?>

    <form name="updaterecord" action="<?php $_PHP_SELF ?>" method="post">
    <div class="col-sm-10">
        <label class="form-label">ID </label>
        <input type="text" class="form-control" name="displayid" value="<?php echo $e_id; ?>";>
        <label class="form-label">Name </label>
        <input type="text" class="form-control" name="displayname" value="<?php echo $name; ?>";>
        <label class="form-label">E-mail Address </label>
        <input type="text" class="form-control" name="emailaddress" value="<?php echo $emailadd; ?>";>
    </div>
    <input type="submit" class="btn btn-primary" name="updaterecord" value="Update Record">
</form>
  </body>
</html>

