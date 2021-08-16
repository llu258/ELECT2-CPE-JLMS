<?php
include('servercon.php');

$sqlstring = "DROP TABLE tblinfo";

if(mysqli_query($dbconnect, $sqlstring)){
    echo "Table tblinfo deleted successfully";
} else{
    echo "Error deleting table: " . mysqli_error($dbconnect);
}
mysqli_close($dbconnect);

?>