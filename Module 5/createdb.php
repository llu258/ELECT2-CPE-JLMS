<?php 
include ('servercon.php');
$dbname = "testdb";
$sqlstring = "CREATE DATABASE $dbname";
if(mysqli_query($dbconnect, $sqlstring)){
    echo "Database name: $dbname created successfully";
} else {
    echo "Error creating database";
}
mysqli_close($dbconnect);
?>