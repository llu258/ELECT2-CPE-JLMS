<?php
    include('servercon.php');

    error_reporting(0);
?>

<!doctype html>
<html>



<head>

<meta charset = "utf-8">
<meta name = "viewport" content = "width = device-width, initial scale = 1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel = "stylesheet"
integrity = "sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin = "anonymous">

<title>Exit Page</title>

<style>
    body{
        background-color: turquoise;
    }
    h1{
        color: green;
        font-family: Times New Roman;
        padding: 100px;
        
    }
    h5{
        color: #3335d3;
    }
</style>

</head>

<body>
    <h1 align = "center">This is the end of the PHP website.</h1>
    <br><br/><br/><h5 align = "center">Please close out this window.</h5>
</body>

</html>

<?php

if (isset($_POST['exitpage'])){
    if(mysqli_query($dbconnect)){
        echo "Please close this window";
    
    }
    else{
       
    }
}


?>
