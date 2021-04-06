<!DOCTYPE html>
<html>
    <head>
        <title>PHP </title>
    </head>

    <body>

        <?php
        echo "PREFIX INCREMENT OPERATOR";
        //unary (best used for ID #)
        $studentID = 100;
        $current_studentID = ++$studentID; //increment
        echo "<p>The first student ID is ",  $current_studentID, "</p>";
        $current_studentID = ++$studentID;
        echo "<p>The second student ID is ", $current_studentID, "</p>";

        echo "<br>";

        echo "POSTFIX INCREMENT OPERATOR"; //ideal 
        $STUDENTID = 100;
        $CURRENT_STUDID = $STUDENTID++;
        echo "<p>The first student ID is ",  $CURRENT_STUDID, "</p>";
        $CURRENT_STUDID = $STUDENTID++;
        echo "<p>The second student ID is ",  $CURRENT_STUDID, "</p>";

        echo "<br>"; 

        echo "PREFIX DECREMENT OPERATOR";
        //unary (best used for ID #)
        $studentID = 100;
        $current_studentID = --$studentID; //increment
        echo "<p>The first student ID is ",  $current_studentID, "</p>";
        $current_studentID = --$studentID;
        echo "<p>The second student ID is ", $current_studentID, "</p>";

        echo "<br>";

        echo "POSTFIX DECREMENT OPERATOR"; //ideal 
        $STUDENTID = 100;
        $CURRENT_STUDID = $STUDENTID--;
        echo "<p>The first student ID is ",  $CURRENT_STUDID, "</p>";
        $CURRENT_STUDID = $STUDENTID--;
        echo "<p>The second student ID is ",  $CURRENT_STUDID, "</p>";
        
        ?>
    </body>
</html>