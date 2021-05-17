<?php
session_start();

$dbconnect = mysqli_connect("localhost", "testuser", "12345678","testdb");

if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    die();
}


    /*//function-oriented
    $dbconnect =new mysqli("localhost","testuser","12345678");   
    if ($dbconnect -> connect_errno){
        echo "Failed to connect";
        exit();

    }
    else {
        echo "Connected!";
    }

    //object-oriented
    $server = "localhost";
    $user = "testuser";
    $password= "12345678";

    try(
        $dbconnect = new PDO ("mysql: host=$server", $user, $password); //PDO:php data object
        $dbconnect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected!";
    )*/

?>