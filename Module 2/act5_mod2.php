<!DOCTYPE html>
<html>
    <head>
        <title>Comparison and Conditional Operators</title>
    </head>

    <body>

        <?php
            
            echo "Comparison and Conditional Operators";
            $age = 18;
            $address = "Pampanga";
            ($age == 18) && ($address = "Pampanga") ? $message = "<p>You are allowed to go outside</p>" : $message = "You are not allowed to go outside";
            echo $message;
            
            
        ?>
    </body>
</html>