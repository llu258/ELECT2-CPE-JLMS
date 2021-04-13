<!DOCTYPE html>
<html>
    <head>
        <title>LOOPS and MULTIDIMENSIONAL ARRAY</title>
    </head>

    <body>

    <?php
        $MusicalScale = array("do","re","mi","fa","so","la","ti"); 
        
        $OutputString = "The notes of the musical scale are: ";
        foreach($MusicalScale as $CurrentNote)
            $OutputString .= " " . $CurrentNote;

        echo "<p>$OutputString</p>";
    ?>
    </body>
</html>