<?php

    $dbconnect =new mysqli("localhost","testuser","12345678");   
    if ($dbconnect -> connect_errno){
        echo "Failed to connect";
        exit();

    }
    else {
        echo "Connected!";
    }

  
?>