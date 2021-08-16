<?php 

include('servercon.php')

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Database Management</title>
  </head>
  <body>
        <h1>Database Management</h1>

        <form name = "dbform" action = "<?php $_PHP_SELF ?>" method = "post">
        <div class = "col-sm-10">
            <label class = "form-label">Database Name </label>
            <input type = "text" class = "form-control" name = "dbname">
        </div>

        <input type = "submit" class = "btn btn-primary" name = "createdb" value = "Create Database">
        <input type = "submit" class = "btn btn-danger" name = "deletedb" value = "Delete Database">

  </body>
</html>

<?php

if(isset($_POST['createdb']))
{
    $dbname = $_POST['dbname'];
    $sqlstring = "CREATE DATABASE $dbname";

    if (mysqli_query($dbconnect, $sqlstring))
    {
        echo "Database name: $dbname created successfully";
    }
    else
    {
        echo "Error creating database" . mysqli_error($dbconnect);
    }
    mysqli_close($dbconnect);
}

elseif (isset($_POST['deletedb']))
{
    $dbname = $_POST['dbname'];
    $sqlstring = "DROP DATABASE $dbname";

    if (mysqli_query($dbconnect, $sqlstring))
    {
        echo "Database deleted successfully";
    }
    else
    {
        echo "Error deleting database" . mysqli_error($dbconnect);
    }
    mysqli_close($dbconnect);
}

?>