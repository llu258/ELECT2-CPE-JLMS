<?php
    if(isset($_POST['Submit'])){
        $fullname = $_POST["name"];
        $edad = $_POST["age"];

        echo "User has submitted the form and entered this one: $fullname <br>";
        echo "User age is: $edad<br>";
    }


?>

<html>
    <head>
        <title>Registration Form</title>
    </head>

    <body>
        <h4>REGISTRATION FORM</h4>
        <form name="registration" action="<?php $_PHP_SELF ?>" method="POST">
        <div class="mb-3">
            <p>Name: <input type ="text" class="form-control" name="name" /></p>
            <p>Age: <input type ="text" class="form-control" name="age" /></p>
        </div>
            <p><input type ="reset" value="Clear form" /> &nbsp; &nbsp;
            <input type ="submit" name="Submit" value="Send form" /></p>
            <br>
             
        </form>
    </body>
</html>