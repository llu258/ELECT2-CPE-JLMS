<?php
include('servercon.php');

$sqlstring = "DELETE FROM tblinfo WHERE name";

if(mysqli_query($dbconnect, $sqlstring)){
    echo "Records Deleted";
} else 
{
    echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
}
mysqli_close($dbconnect);

?>