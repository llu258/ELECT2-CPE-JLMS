<!DOCTYPE html>
<html>
    <head>
        <title>Two Functions</title>
    </head>

    <body>

        <?php
           function displayMessage($FirstMessage)
           {
               echo "<p>$FirstMessage</p>";
           } 

           function returnMessage()
           {
               return "<p>This message was returned from a function. </p>";
           } 

           displayMessage("This message was displayed from a function.");
           $ReturnValue = returnMessage();
           echo $ReturnValue;
        ?>
    </body>
</html>