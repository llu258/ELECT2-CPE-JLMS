<?php

include('servercon.php');

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
}

$sqlstring = "DELETE FROM tblinfo WHERE ID=$id";

if(mysqli_query($dbconnect, $sqlstring)){
    echo " Records Deleted";
} else 
{
    echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
}
mysqli_close($dbconnect);


?>