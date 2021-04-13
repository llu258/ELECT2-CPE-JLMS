<?php
    
//constructing string
    echo "<br>";
    echo ' <p> This is a text string using a "double uote". </p>';
    echo " <p> This is a text string using a 'single uote'. </p>";
    echo "<br>";

//concatenation assignment operator
    $Destination = "<p>Paris";
    $Destination .= " is in France </p>";
    echo $Destination;
    echo "<br>";
    
//Adding Esc Characters and Seuences
    echo 'This is a code\'s going to work';
    echo "This code's going to work";
    echo "<p>Theme: \"New Pedagogy in New Normal</p>";
    echo "<br>";
    $price = 30.00;
    echo "\$$price";
    echo "<br>";

//Simple string syntax
    $vegetable = "Broccoli";
    echo "<p> Do you have any $vegetable?</p>";
    echo "<br>";

//Complex String syntax: use curly braces to notice variable
    $fruits = "Apple";
    echo "<p>Do you have any { $fruits}?</p>";
    echo "<br>";

//counting characters and words in a string
    $booktitle="John Wick";
    echo "<p>The movie title contains " . str_word_count($booktitle) . "word</p>";
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
    echo "<br>";
    echo "<br>";
    echo "<br>";

//encoded using str_13

    $samplestring = "Hello World";
    $encoded = str_rot13($samplestring);
    echo $encoded;
    echo "<br>";
    $decoded = str_rot13($encoded);
    echo $decoded;

//encoded using base64_encode and base64_decode

    $samplebase64 = "Hello World!";
    echo "<br>";
    $encoded_base64 = base64_encode($samplebase64);
    echo $encoded_base64;
    echo "<br>";
    $decode_base64 = base64_decode($samplebase64);
    echo $decode_base64;
    echo "<br>";

    //str_rot13 - shift alphabet to 13 places
    //base64_encode - accepts alphanumeric char, has function to decode

//encoded using md5 hash
    $passwordDB = "pass";
    $passwordUSER = "pass";
    $md5codeDB = md5($passwordDB);
    $md5codeUSER = md5($passwordUSER);
    echo $md5codeDB;
    echo "<br>";
    echo $md5codeUSER;
    echo "<br>";

    //kahit konti char; ganun parin no. ng char
    //recommended for storing password

//trim functions in PHP
    $str = "Hello";
    $str2 = "World";
    $str3 = trim($str2);
    echo "<br>";
    echo $str . $str2;
    echo "<br>";
    echo $str . $str3;
    echo "<br>";
    //echo trim($str, "Hed");
    //trim removes the leading or trailing
    //trim removes unwanted space

//trim using ltrim
    $ltrim = "Hello World";
    echo ltrim($ltrim, "World");
    echo "<br>";

//using subtr function
    $exampestring = "woodworking project";
    echo substr($exampestring,-4);
    echo "<br>";
    echo substr($exampestring, -6, 4);


?>
