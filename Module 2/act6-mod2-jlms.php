<!DOCTYPE html>
<html>
    <head>
        <title>Comparison Examples</title>
    </head>

    <body>
        <?php
        
           $Value1 = "string";
           $Value2 = "string";
           $ReturnValue = ($Value1 == $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 equal to $Value2: ',$ReturnValue,"<br />";
           
           $Value1 = 50;
           $Value2 = 50; 
           $ReturnValue = ($Value1 == $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 equal to $Value2: ',$ReturnValue,"<br />";
           $ReturnValue = ($Value1 != $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 not equal to $Value2: ',$ReturnValue,"<br />";

           $ReturnValue = ($Value1 <> $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 equal to $Value2: ',$ReturnValue,"<br />";
           $ReturnValue = ($Value1 > $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 greater than to $Value2: ',$ReturnValue,"<br />";
           $ReturnValue = ($Value1 < $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 less than $Value2: ',$ReturnValue,"<br />";
           $ReturnValue = ($Value1 >= $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 greater than or equal to $Value2: ',$ReturnValue,"<br />";
           $ReturnValue = ($Value1 <= $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 less than or equal to $Value2: ',$ReturnValue,"<br />";

           $Value1 = 25;
           $Value2 = 15;
           $ReturnValue = ($Value1 === $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 equal to $Value2 AND the same data type: ',$ReturnValue, "<br />";
           $ReturnValue = ($Value1 !== $Value2 ? "<b>TRUE</b>" : "<b>FALSE</b>");
           echo '<p>$Value1 not equal to $Value2 AND not the same data type: ' ,$ReturnValue, "</p>";          
        ?>
    </body>
</html>