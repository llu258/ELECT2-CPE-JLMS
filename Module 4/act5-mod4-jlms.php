<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>

    <body>
        <h4>R E G I S T R A T I O N   F O R M</h4>
        <form name="registration" action="<?php $_PHP_SELF ?>" method="post">
            <p>Name: <input type ="text" name="name" /></p>
            <p>Age: <input type ="age" name="age" /></p>
            <p><input type ="reset" value="Clear form" /> &nbsp; &nbsp;
            <input type ="submit" name="Submit" value="Send form" /></p>
            <br>
           
        </form>
    </body>
</html>

<?php
    if(isset($_POST['Submit'])){
        $fullname = $_POST["name"];
        $edad = $_POST["age"];

        echo "User has submitted the form and entered this one: $fullname <br>";
        echo "User age is: $edad<br>";
    }


?>