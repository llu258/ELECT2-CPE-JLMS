<?php
include('servercon.php');
$dbname = "testdb";


if($dbconnect === FALSE)
echo "<p>Connection error: " . mysqli_connect_errno(). "</p>";
else
{
if(mysqli_select_db($dbconnect, $dbname) === FALSE)
echo "<p>Could not select the \"$dbname\" database </p>";
else {
    echo "<p> Selected the \"$dbname\" database </p>";
}
mysqli_close($dbconnect);
}
?>