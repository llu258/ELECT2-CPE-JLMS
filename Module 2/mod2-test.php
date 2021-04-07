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

            $Value = 75;
            if($Value == 75)
            {
                echo "<p> The condition of the value is  true. </p>";
                echo "Each of these lines will be printed <br />";
            }
            echo "<p> This statement always executes after th eif statement. </p>";

           if ($Value >= 75){

            echo "PASSED<br />";

            $a = 5;
            $b = 10;

            $c = $a + $b;
            echo "<p>Total: <s?p>",$c. BR;

            }
            else{
                echo "FAILED<br />";

            }
            echo "<p>This statement always executes after the if statement.</p>";

//nested if and nested if else
            //sales total
            $SalesTotal = 56;
            if($SalesTotal >= 50)
                if($SalesTotal <= 100)
                    echo "The sales total is between 50 and 100";
             //age  
            $Age = 15;
            if($Age < 30){
                echo "<p>Your age is less than 30.</p>";
            }
            else if($Age > 40 && $Age < 50){
                echo "<p>Your age is between 40 and 50</p>";
            }
            else if($Age > 30 && $Age < 40){
                echo "<p>Your age is between 30 and 40</p>";
            }            
            else{
                echo "<p>";
            }

//switch case statement
            $site = "Business";
            switch ($site){
                case 'Business':
                    echo "My favourite site is business.com!";
                    break;
                case 'Code':
                    echo "My favourite site is code.com";
                    break;
                case 'Music':
                    echo "My favourite site is music.com!";
                    break;
                case 'Video':
                    echo "My favourite site is video.com";
                    break;   
                default:
                    echo "I like everything at ";
                
            }

        ?>
    </body>
</html>