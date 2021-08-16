<?php
include('servercon.php');

$sqlstring = "INSERT INTO tblinfo (name, email) VALUES ('Juan dela Cruz', 'juan@gmail.com')";

if(mysqli_query($dbconnect, $sqlstring)){
    echo "New record created";
} else 
{
    echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
}
mysqli_close($dbconnect);

?>