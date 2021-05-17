<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    
    <style>
      .icon-input-btn{
        display: inline-block;
        position: relative;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
    }
    .icon-input-btn .fa{
        display: inline-block;
        position: absolute;
        left: 0.25em;
        top: 30%;
    }
    </style>

<script>
$(document).ready(function(){
	$(".icon-input-btn").each(function(){
        var btnFont = $(this).find(".btn").css("font-size");
        var btnColor = $(this).find(".btn").css("color");
      	$(this).find(".fa").css({'font-size': btnFont, 'color': btnColor});
	}); 
});
</script>

<title>Retrieve Information</title>

</head>

<body>
<h1 align = "center">Find Records</h1>
<form name="searchrecords" action="<?php $_PHP_SELF ?>" method="post"> 

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Enter your Last Name" name="usersearch">

  <div class="input-group-append">
  <span class="icon-input-btn">
		<i class="fa fa-search"></i> 
		<input type="submit" class="btn btn-primary" name="searchrecord" value="Search">
	</span> </div>
</div>
</form>

<?php
include('servercon.php');

error_reporting(E_ALL ^ E_WARNING);

if(isset($_POST['searchrecord']))
{
$searchcriteria = $_POST['usersearch'];

$sqlstring = "SELECT * FROM empinfo WHERE Last_Name LIKE '%$searchcriteria%'";

$queryresult = mysqli_query($dbconnect, $sqlstring);

if(mysqli_num_rows($queryresult)>0){  



echo "<table class=\"table table-sm\"><tr> <th>EMPLOYEE ID</th> <th>LAST NAME</th> <th>FIRST NAME</th> <th>GENDER</th>" ;
   
while($row = mysqli_fetch_assoc($queryresult)){
        echo "<tr><td>" . $row['Employee_ID'] . "</td><td>" . $row['Last_Name'] . "</td><td>" . $row['First_Name'] . 
        "</td><td>" . $row['Gender'] . "</td><td> <a href =\"update.php?update_info=" . $row['Employee_ID'] . "\" class=\"btn btn-warning\">Edit</a> 
        <a href =\"delete.php?delete_id=" . $row['Employee_ID'] . "\" class=\"btn btn-danger\">Delete</a></td>";
        
        
    }

} else
{
    echo "No Results";
}
mysqli_close($dbconnect);
echo "</table>";

}
?>
</body>
</html>



