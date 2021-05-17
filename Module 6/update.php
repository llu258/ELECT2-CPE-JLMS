<?php 
include('servercon.php');

error_reporting(0);

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
    <title>Update Records</title>
  </head>
  <body>
  
    <h1>Update Records</h1>
    <h6><i>Edit your information in this selected fields</i></h6>
    
    <?php
    if(isset($_POST['updaterecord'])){

      $updID =$_POST['updateid'];
      $updLname = $_POST['updlastname'];
      $updFname = $_POST['updfirstname'];
      $updMname = $_POST['updmidname'];
      
      $updGender = $_POST['updgender'];
      $updBdate = $_POST['updbirthdate'];
      $updBplace = $_POST['updbirthplace'];
      $updCivil =$_POST['updatecvs'];
      
      $updAge = $_POST['updage'];
      $updCtzship = $_POST['updctzship'];
      $updReligion = $_POST['updreligion'];
      $updContact =$_POST['updcontact'];

      $updEmail = $_POST['updemail'];
      $updTown = $_POST['updtown'];
      $updProvince = $_POST['updprovince'];
      $updAdress =$_POST['updaddress'];

      $sqlstring = "UPDATE empinfo SET Last_Name= '$updLname' , First_Name='$updFname' , Middle_Name='$updMname' , Gender = '$updGender' ,
      Date_Of_Birth = '$updBdate' , Place_Of_Birth = '$updBplace' , Civil_Status = '$updCivil' , Age = '$updAge' , Citizenship = '$updCtzship' ,
      Religion = '$updReligion' , Contact_No = '$updContact' ,  Email_Address = '$updEmail' , Address = '$updAdress' WHERE Employee_ID='$updID'";

 
      if(mysqli_query($dbconnect, $sqlstring)){
        echo "Your information has been updated <br>";
        
    } else 
    {
        echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
    }
   
    mysqli_close($dbconnect);
  }

?>

    <?php 
    if(isset($_GET['update_info'])){
      $updinfo = $_GET['update_info'];
      $sqlstring = mysqli_query($dbconnect, "SELECT * FROM empinfo WHERE Employee_ID = '$updinfo'");
      $r = mysqli_fetch_array($sqlstring);

      $r_ID = $r['Employee_ID'];
      $r_lname = $r['Last_Name'];
      $r_fname = $r['First_Name'];
      $r_mname = $r['Middle_Name'];
      $r_gender = $r['Gender'];
      $r_bdate = $r['Date_Of_Birth'];
      $r_bplace = $r['Place_Of_Birth'];
      $r_status = $r['Civil_Status'];
      $r_age = $r['Age'];
      $r_ctzship = $r['Citizenship'];
      $r_religion= $r['Religion'];
      $r_email = $r['Email_Address'];
      $r_contact = $r['Contact_No'];
      $r_address = $r['Address'];
      $r_town = $r['Town'];
      $r_province= $r['Province'];
    }
    ?>

    <form name="updaterecord" action="<?php $_PHP_SELF ?>" method="post">
    <div class="col-sm-10">
        <label class="form-label">Employee ID </label>
        <input type="text" class="form-control" name="updateid" value="<?php echo $updinfo; ?>";>
        <label class="form-label">Last Name </label>
        <input type="text" class="form-control" name="updlastname" value="<?php echo $r_lname; ?>";>
        <label class="form-label">First Name </label>
        <input type="text" class="form-control" name="updfirstname" value="<?php echo $r_fname; ?>";>
        <label class="form-label">Middle Name </label>
        <input type="text" class="form-control" name="updmidname" value="<?php echo $r_mname; ?>";>
        <label class="form-label">Gender </label>
        <input type="text" class="form-control" name="updgender" value="<?php echo $r_gender; ?>";>
        <label class="form-label">Date of Birth </label>
        <input type="text" class="form-control" name="updbirthdate" value="<?php echo $r_bdate; ?>";>
        <label class="form-label">Place of Birth </label>
        <input type="text" class="form-control" name="updbirthplace" value="<?php echo $r_bplace; ?>";>
        <label class="form-label">Civil Status </label>
        <input type="text" class="form-control" name="updatecvs" value="<?php echo $r_status; ?>";>
        <label class="form-label">Age </label>
        <input type="text" class="form-control" name="updage" value="<?php echo $r_age; ?>";>
        <label class="form-label">Citizenship </label>
        <input type="text" class="form-control" name="updctzship" value="<?php echo $r_ctzship; ?>";>
        <label class="form-label">Religion </label>
        <input type="text" class="form-control" name="updreligion" value="<?php echo $r_religion; ?>";>
        <label class="form-label">Contact No </label>
        <input type="text" class="form-control" name="updcontact" value="<?php echo $r_contact; ?>";>
        <label class="form-label">Email Address </label>
        <input type="text" class="form-control" name="updemail" value="<?php echo $r_email; ?>";>
        <label class="form-label">Home Address </label>
        <input type="text" class="form-control" name="updaddress" value="<?php echo $r_address; ?>";>
        <label class="form-label">Town </label>
        <input type="text" class="form-control" name="updtown" value="<?php echo $r_town; ?>";>
        <label class="form-label">Province </label>
        <input type="text" class="form-control" name="updprovince" value="<?php echo $r_province; ?>";>

   
    </div>
    <input type="submit" class="btn btn-primary" name="updaterecord" value="Update Record">
    <input type="submit" class="btn btn-secondary" name="homepage" formaction="/elect3_bscoe3_jlms/Module%206/index.php" value="Back to Home">
</form>

  </body>
</html>

