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

    <title>Employee Information</title>
  </head>

  <body>
    <h1 align="center">Employee Information</h1>

   <form name="emp_info" action="<?php $_PHP_SELF ?>" method="post">
   
    <div class="mx-sm-4">
        
    
    <label class="form-label"><b>Employee ID</b> </label>
        <input type="text" class="form-control" placeholder="Enter your Employee ID" name="displayID">
        <label class="form-label"><b>Last Name</b> </label>
        <input type="text" class="form-control" placeholder="Enter your Last Name" name="s_name">
        <label class="form-label"><b>First Name</b> </label>
        <input type="text" class="form-control" placeholder="Enter your First Name" name="f_name">
        <label class="form-label"><b>Middle Name</b> </label>
        <input type="text" class="form-control" placeholder="Enter your Middle Name" name="m_name">
        <label class="form-label"><b>Gender</b> <i>(e.g. Male, Female)</i> </label>
        <input type="text" class="form-control" placeholder="Enter your Gender" name="genderID">
        <label class="form-label"><b>Date of Birth</b> <i>(e.g. August 21, 2001; 02/25/2000)</i> </label>
        <input type="text" class="form-control" placeholder="Enter your Birthdate" name="birthdate">
        <label class="form-label"><b>Place of Birth</b> </label>
        <input type="text" class="form-control" placeholder="Enter your Birthplace" name="birthplace">
        <label class="form-label"><b>Civil Status</b> <i>(e.g. Single, Married)</i></label>
        <input type="text" class="form-control" placeholder="Enter your Civil Status" name="civ_stat">
        <label class="form-label"><b>Age</b> <i>(your current age)</i></label>
        <input type="text" class="form-control" placeholder="Enter your current age" name="emp_age">
        <label class="form-label"><b>Citizenship</b> <i>(e.g. Filipino, American)</i></label>
        <input type="text" class="form-control" placeholder="Enter your current citizenship" name="ctzship">
        <label class="form-label"><b>Religion</b> <i>(e.g. Roman Catholic, Born Again)</i></label>
        <input type="text" class="form-control" placeholder="Enter your religion" name="relihyon">
        <label class="form-label"><b>Contact No.</b> <i>(e.g. mobile no., tel no.)</i> </label>
        <input type="text" class="form-control" placeholder="Enter your contact details" name="contactinfo">
        <label class="form-label"><b>E-Mail Address</b> <i>(e.g. your_name@example.com)</i> </label>
        <input type="text" class="form-control" placeholder="Enter your E-mail address" name="emailadd">
        <label class="form-label"><b>Home Address</b> <i>(e.g. Tuscany Street, Brgy.Cara)</i></label>
        <input type="text" class="form-control" placeholder="Enter your Home Address details" name="homeadd">
        <label class="form-label"><b>Town</b> <i>(e.g. Angeles City, Meycauayan)</i></label>
        <input type="text" class="form-control" placeholder="Enter the current town/municipality" name="emp_town">
        <label class="form-label"><b>Province</b> <i>(e.g. Pampanga, Bulacan)</i></label>
        <input type="text" class="form-control" placeholder="Enter the province" name="emp_prvince">
       </div> 
    <br>
   <div align="center">
   <input type="submit" class="btn btn-primary" name="emplinfo" value="Submit Information">
   <input type="reset" class="btn btn-danger" name="emplinfo" value="Reset Information">
   <input type="submit" class="btn btn-info" name="searchrecord" formaction="/elect3_bscoe3_jlms/Module%206/retrieve.php" value="Find Records">
   <input type="submit" class="btn btn-secondary" name="homepage" formaction="/elect3_bscoe3_jlms/Module%206/index.php" value="Back to Home">
   </div>
  
   
   <br>
</form>
  </body>
</html>

<?php

if(isset($_POST['emplinfo']))
{
    $EmployeeID = $_POST['displayID'];
    $LastName = $_POST['s_name']; 
    $FirstName = $_POST['f_name'];
    $MidName = $_POST['m_name'];
    $Gender = $_POST['genderID'];
    $Birth_date = $_POST['birthdate']; 
    $Birth_place = $_POST['birthplace'];
    $CVStatus = $_POST['civ_stat'];
    $Emp_Age = $_POST['emp_age'];
    $CTZShip= $_POST['ctzship']; 
    $Religion = $_POST['relihyon'];
    $ContactNum = $_POST['contactinfo'];
    $Email = $_POST['emailadd'];
    $Address = $_POST['homeadd']; 
    $Town = $_POST['emp_town'];
    $Province = $_POST['emp_prvince']; 

    $sqlstring = "INSERT INTO empinfo (Employee_ID, Last_Name, First_Name, Middle_Name, Gender, Date_Of_Birth, Place_Of_Birth, 
    Civil_Status, Age, Citizenship, Religion, Contact_No, Email_Address, Address, Town, Province) 
    VALUES ('$EmployeeID', '$LastName', '$FirstName', '$MidName', '$Gender', '$Birth_date', '$Birth_place',
    '$CVStatus', $Emp_Age, '$CTZShip', '$Religion', '$ContactNum','$Email', '$Address', '$Town', '$Province')"; 
  
    
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

