<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Database Management</title>
  </head>
  <body>
    <h3>Retrieving Records</h3>
<form name="searchrecords" action="<?php $_PHP_SELF ?>" method="post"> 

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search Criteria" name="usersearch">
  <div class="input-group-append">
    <input class="btn btn-outline-secondary" type="submit" name="searchrecord" value="Search"/>
  </div>
</div>
</form>

<?php

include('servercon.php');

if(isset($_POST['searchrecord']))
{
$searchcriteria = $_POST['usersearch'];

$sqlstring = "SELECT * FROM tblinfo WHERE name LIKE '%$searchcriteria%'";

$queryresult = mysqli_query($dbconnect, $sqlstring);

if(mysqli_num_rows($queryresult)>0){

    $searchresult = mysqli_num_rows($queryresult);
    echo "Found $searchresult record/s";

echo "<table class=\"table table-striped\"><tr> <th>ID</th> <th>NAME</th> <th>EMAIL</th>";
   
while($row = mysqli_fetch_assoc($queryresult)){
        echo "<tr><td>" . $row['ID'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td></tr>";
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



