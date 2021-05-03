<?php
    if(isset($_POST['Submit'])){
        $studNUM = $_POST["studnum"];
        $sname = $_POST["sname"];
        $course = $_POST["course"];
        $yrlevel = $_POST["yrlevel"];
        $section = $_POST["section"];
        $email = $_POST["email"];
        $bdate = $_POST["bdate"];
        $gender = $_POST["gender"];

        echo "Your student number is $studNUM <br>";
        echo "Your name is $sname<br>";
        echo "Your course is $course <br>";
        echo "$bdate is your birthdate <br>";
        echo "Your current level is $yrlevel year <br>";
        echo "Your current section is $section <br>";
        echo "Your email is $email <br>";
        echo "$gender is your gender <br>";        
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
            <p>Student No.: <input type ="text" class="form-control" name="studnum" /></p>
            <p>Student Name: <input type ="text" class="form-control" name="sname" /></p>
            <p>Course: <input type ="text" class="form-control" name="course" /></p>
            <p>Year Level: <br>
                <input type="radio" id="first" name="yrlevel" value="1st"><label for="1st">1</label><br>
                <input type="radio" id="second" name="yrlevel" value="2nd"><label for="2nd">2</label><br>
                <input type="radio" id="third" name="yrlevel" value="3rd"><label for="3rd">3</label><br>
                <input type="radio" id="fourth" name="yrlevel" value="4th"><label for="4th">4</label></p>
            <p>Section: <input type ="text" class="form-control" name="section" /></p>
            <p>E-Mail: <input type ="text" class="form-control" name="email" /></p>
            <p>Birthdate:  <input type="date" id="birthday" name="bdate"></p>
            <p>Gender:<br>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="Male">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="Female">Female</label></p>
        </div>
            <p><input type ="reset" value="Clear form" /> &nbsp; &nbsp;
            <input type ="submit" name="Submit" value="Send form" /></p>
            <br>
             
        </form>
    </body>
</html>