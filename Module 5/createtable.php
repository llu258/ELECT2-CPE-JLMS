<?php
include('servercon.php');

$sqlstring = "CREATE TABLE tblinfo (ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100))";

if(mysqli_query($dbconnect, $sqlstring)){
    echo "Table tblinfo created successfully";
} else{
    echo "Error creating table: " . mysqli_error($dbconnect);
}
mysqli_close($dbconnect);

?>