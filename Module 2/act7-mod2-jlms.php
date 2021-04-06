<!DOCTYPE html>
<html>
    <head>
        <title>Logical Examples</title>
    </head>

    <body>

        <?php
            $TrueValue = true;
            $FalseValue = true;
            $ReturnValue = ($TrueValue ? "true" : "false");
            echo "<p>$ReturnValue<br />";
            $ReturnValue = ($FalseValue ? "false" : "true");
            echo "$ReturnValue<br />";
            $ReturnValue  = ($TrueValue || $FalseValue ? "true" : "false");
            echo "$ReturnValue<br />";
            $ReturnValue  = ($TrueValue && $FalseValue ? "false" : "false");
            echo "$ReturnValue<br />";
            echo "</p>";
        ?>
    </body>
</html>