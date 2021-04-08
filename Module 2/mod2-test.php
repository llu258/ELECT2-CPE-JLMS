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
                    echo "<p>My favourite site is business.com!</p><br />";
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
                    echo "I like everything :)";
                
            }

//functions: repeated
    
    //while
    $Count = 1;
    while($Count <= 10)
    {
        echo "  $Count";
        ++$Count;
    }

   //do while
    $Count = 1;
    do{
        echo "<p>The count is eual to $Count</p>";
        ++$Count;

    } while($Count <= 4);

    //for loop
    $province = array("Pampanga","Tarlac","Bulacan","Zambales");
    $NoofProvince = count($province);

    for($i = 0; $i<2; $i++)
    {
        echo $province[$i], "<br>";
    }

    echo "</p>";
    foreach($province as $probinsya)
    {
        echo $probinsya. "<br />";
    }

    echo "</p>";
//array: applicable for pooling data
    //init array
    $lamborghinis = array("suv" => "Urus", "sports" => "Huracan", "coupe" => "Aventador");

    //find size of the array
    $size = count($lamborghinis);

    //getting th earray of keys/index strings
    $keys = array_keys($lamborghinis);

    //using the for loop
    for($i=0;$i<$size; $i++){
        echo $lamborghinis[$keys[$i]] . " is a " . $keys[$i] . " car <br>";

    }
        
        ?>
    </body>
</html>