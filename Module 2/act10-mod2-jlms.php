<!DOCTYPE html>
<html>
    <head>
        <title>Conditional Expressions</title>
    </head>

    <body>

        <?php
            define ("BR", "<br />");
        $sname = "Sison";
        $mname = "M";
        $fname = "Jesus Luigi";


        $Pre = 80.50;
        $Mid = 85.10;
        $Fin = 90.55;

    //concatenation: pag-merge 
        $FullName =  $sname . ", " . $fname . " " . $mname . "."; 
        $finalgrade = ($Pre + $Mid + $Fin) / 3;

        echo "Student Name: ", $FullName . BR;
        echo "Prelim Grade: ", $Pre . BR;
        echo "Midterm Grade: ", $Mid . BR;
        echo "Final Grade: ", $Fin . BR;
        echo "Subject Final Grade: ", $finalgrade . BR;

        if ($finalgrade > 74){
            echo "Remarks: PASSED". BR;
        }
        else{
            echo "Remarks: FAILED" . BR;
        }

        if ($finalgrade >= 98 && $finalgrade <= 100){
            echo "Rating: Excellent". BR;
        }
        else if ($finalgrade >= 92 && $finalgrade <= 97){
            echo "Rating: Very Good" . BR;
        }
        else if ($finalgrade >= 83 && $finalgrade <= 91){
            echo "Rating: Good" . BR;
        }
        else if ($finalgrade >= 78 && $finalgrade <= 82){
            echo "Rating: Fair". BR;
        }
        else if ($finalgrade >= 75 && $finalgrade <= 77){
            echo "Rating: Passed". BR;
        }
        else{
            echo "Rating: Failed". BR;
        }
        ?>
    </body>
</html>