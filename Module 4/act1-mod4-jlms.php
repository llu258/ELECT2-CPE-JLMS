<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>

    <body>
        <h4>REGISTRATION FORM</h4>


    <?php

    //Module 04 - Activity 01
        /*$firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        echo "Thank you for filling out the registration form, $firstname $lastname.    ";*/
   
    //Module 04 - Activity 02    
        function displayRequired($fieldname){
            echo "The field \"$fieldname\" is required.<br />";//manipulating user name  with user input
        }

        function validateInput($data, $fieldname){
            global $errorCount;

            if(empty($data)){
                displayRequired($fieldname);
                ++$errorCount;
                $retval = "";
            }

            else{
                $retval = trim($data);
                $retval = stripslashes($retval);//titreat ni php na string at hindi part ng php code
            }

            return($retval);
        }
        $errorCount = 0;

        $firstname = validateInput($_POST['fname'], "Firstname");   
        $lastname = validateInput($_POST['lname'], "Lastname");
        if($errorCount > 0)
            echo "Pleas use the \"back\" button to re-enter the data.</ br>"; 
        else       
            echo "Thank you for completing the registration form, $firstname $lastname. ";

         
?>
    </body>
</html>
