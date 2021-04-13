<?php
    
//constructing string
    echo "<br>";
    echo ' <p> This is a text string using a "double uote". </p>';
    echo " <p> This is a text string using a 'single uote'. </p>";
    echo "<br>";
    echo "<br>";

//concatenation assignment operator
    $Destination = "<p>Paris";
    $Destination .= "is in France </p>";
    echo $Destination;
    echo "<br>";
    echo "<br>";
    
//Adding Esc Characters and Seuences
    echo 'This is a code\'s going to work';
    echo "This code's going to work";
    echo "<p>Theme: \"New Pedagogy in New Normal</p>";
    echo "<br>";
    $price = 30.00;
    echo "\$$price";
    echo "<br>";
    echo "<br>";

//Simple string syntax
    $vegetable = "Broccoli";
    echo "<p> Do you have any $vegetable?</p>";
    echo "<br>";
    echo "<br>";

//Complex String syntax: use curly braces to notice variable
    $fruits = "Apple";
    echo "<p>Do you have any { $fruits}?</p>";
    echo "<br>";
    echo "<br>";

//counting characters and words in a string
    $booktitle="John Wick";
    echo "<p>The movie title contains " . str_word_count($booktitle) . "word</p>";
    echo "<br>";
    echo "<br>";
    $sampletxt = "tHis SeNTEncE is In A difFeRENt tEXT CaSE. ";
    echo "<h1> Confusing Text</h1><br>";
    echo "UPPER CASE: " . strtoupper($sampletxt) . "<br>";
    echo "lower case: " . strtolower($sampletxt) . "<br>";
    echo "lower CASE: " . ucfirst($sampletxt) . "<br>";
    echo "UPPER CASE: " . lcfirst($sampletxt) . "<br>";

    $lowertextcase = strtolower($sampletxt);
    $workingtext = ucwords($lowertextcase);
    echo $workingtext;


?>