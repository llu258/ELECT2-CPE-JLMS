<!DOCTYPE html>
<html>
    <head>
        <title>Formatted Text</title>
    </head>

    <body>

    <?php
        $DisplayValue = 9.876;

        //PHP Code to display some unformatted text.
        echo "<pre>\n";
        echo "Unformatted Text line 1. ";
        echo "Unformatted text line 2. ";
        echo "$DisplayValue = $DisplayValue";
        echo "</pre>\n";//Using the <pre> tag tells the Web browser not to convert those characters to spaces.

        //PHP Code to display some formatted text.
        echo "<pre>\n";
        echo "Formatted text line 1. \r\n";
        echo "\tFormatted text line 2. \r\n";
        echo "\$DisplayValue = $DisplayValue";
        echo "</pre>\n";
    ?>
    </body>
</html>