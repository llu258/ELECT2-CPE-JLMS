<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>

    <body>
        <h4>R E G I S T R A T I O N &nbsp;F O R M</h4>


    <?php
    if($_REQUEST["name"] || $_REQUEST["age"]){
        echo "Welcome " . $_REQUEST["name"]. "<br />";
        echo "You are " . $_REQUEST["age"]. " years old.<br />";
        exit();
    }

            
?>
    </body>
</html>
