<!DOCTYPE html>
<html>
    <head>
        <title>Functions</title>
    </head>

    <body>

        <?php
            define ("BR", "<br />");

            //echo vs return: echo
            function displayCourse($Course1,$Course2,$Course3)
            {
                echo "Courses Offered" . BR;
                echo "Information Technology: " . $Course1 . BR;
                echo "Electronics Engineering: " . $Course2 . BR;
                echo "Computer Engineering:"  . $Course3 . BR;
            }

            displayCourse("BSIT","BSECE","BSCPE");

            //return: string will just return the first value
            function displayCourse2($Course1,$Course2,$Course3)
            {
                return $Course1;
                return $Course2;
                return $Course3;
            }

            echo BR;
            echo displayCourse2("BSIT","BSECE","BSCPE");
            
            function averageNumber($a, $b, $c){
                $SumofNumbers = $a + $b + $c;
                $result = $SumofNumbers/3;

                return $result;
            }

            echo BR;
            echo averageNumber(90,85,68);

            $a = 50;
            $b = 25;

            function addition()
            {
                $GLOBALS['c'] = $GLOBALS ['a'] + $GLOBALS['b'];
            }

            addition();
            echo BR . $c;

            $Value = 75
            if($Value == 75)
            {
                echo "<p> The condition of the value is  true. </p>";
                echo "Each of these lines will be printed <br />";
            }
            echo "<p> This statement always executes after th eif statement. </p>";

           if (value >= 75){

            echo "PASSED";

            $a = 5;
            $b = 10;

            $c = $a + $b;
            echo $c;

            }
            else{
                echo "FAILED";

            }
            echo "This statement always executes after the if statement.</p>";
                
        ?>
    </body>
</html>