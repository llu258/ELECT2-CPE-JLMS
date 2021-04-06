<!DOCTYPE html>
<html>
    <head>
        <title>PHP Arrays</title>
    </head>

    <body>

        <?php
            $province = array(
                "Pampanga","Tarlac","Bulacan","Zambales"
            );

            echo "$province[2]<br />";
            echo "$province[0]<br />";
            echo "$province[1]<br />";
            echo "$province[2]<br />";
            echo "$province[3]<br />";

            echo "Central Luzon has ", count($province), " provinces.";
        ?>
    </body>
</html>