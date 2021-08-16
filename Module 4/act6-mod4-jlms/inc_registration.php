<html>
    <head>
        <title>Registration Form</title>
    </head>

    <body>
        <h4>REGISTRATION FORM</h4>
        <form name="registration" action="inc_reg_message.php" method="POST">
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

<?php
    

?>