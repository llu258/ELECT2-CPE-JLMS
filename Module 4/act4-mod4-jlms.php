
<html>
    <head>
        <title>
           Registration Form
        </title>
    </head>
    <body>
        <h4>REGISTRATION FORM</h4>
        <form name="registration" action="<?php $_PHP_SELF ?>" method="post" >
        <P>Name: <input type="text" name="name" /></P>
        <P>Age: <input type="text" name="age" /></P>
       <input type="submit"name="Submit" value="Send Form" /></p>

    </form>
        </body>
   
</html>

<?php 
if($_REQUEST["name"] || $_REQUEST["age"]) {
    echo "Welcome " . $_REQUEST['name']. "<br />";
    echo "Your are " . $_REQUEST['age']. " years old.<br />";
    exit();
}
?>