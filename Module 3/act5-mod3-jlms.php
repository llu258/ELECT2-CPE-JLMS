<!DOCTYPE html>
<html>
    <head>
        <title>Manipulate Case String</title>
    </head>

    <body>

    <?php

        $StartingText ="mAdAm, i'M aDaM."; //declare  and initialize a string

        //convert and display the string in uppercase and lowercase
        $UppercaseText = strtoupper($StartingText);
        $LowercaseText = strtolower($StartingText);
        echo "<p>$UppercaseText</p>\n";
        echo "<p>$LowercaseText</p>\n";

        // display the text with different mixes of uppercase and lowercase letters
        echo "<p>" . ucfirst($LowercaseText) . "</p>\n";
        echo "<p>" . lcfirst($UppercaseText) . "</p>\n";
        $WorkingText = ucwords($LowercaseText);
        echo "<p>$WorkingText</p>\n";
    ?>
    </body>
</html>