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
    echo "<br>";
    echo "<br>";

//parsing: divide string into components, extract information
    $email = "balutiboyashford@yahoo.com";
    $char_search = "@";
    echo "Search for the character, " . $char_search; 
    echo "<br />";
    echo $email;
    echo "<br />";
    echo strpos($email, $char_search); //parsing using strpos

    echo "<br />";
    if(strpos($email,'@') !==FALSE)
    echo "<p>The e-mail address contains an @ character.</p>";
    else
    echo "<p>The e-mail address does not containd an @ character.</p>";

//parsing using strchr() and strrchr()
//strchr:beginning of the string 
//strrchr: ending of the string
    echo "<p>The top-level domain of the e-mail address is " . strrchr($email, '@') . "</p>";
    echo "<p>The top-level domain of the e-mail address is " . strchr($email, 'y') . "</p>";
    echo "<br />";

    $email2 = "sison.jesusluigi@auf.edu.ph";
    if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
        echo("$email2 is not valid e-mail address");
    }
    echo "<br>";

//strreplace() replace function
    $newemail = str_replace("edu", "com", $email2);//replace "edu" to "com"
    echo $newemail;
    echo "<br>";

//substr_replace
    $nameEnd = strpos($email2, '@');
    $newEmail2 = substr_replace($email2,"sison",0, $nameEnd);
    echo $newEmail2;
    echo "<br>";
    echo "<br>";

//divide string using strtok(); nagagamit sa mga CSV format(excel)
    $courses = "BSCOE;BSIT;BSCS;BSIS";
    $coursearray = explode(";", $courses);
    $separatedcourses = strtok($courses, ";");

    foreach ($coursearray as $courses){
        echo "$courses<br />";
    }
    
    while ($separatedcourses != NULL){
        echo "$separatedcourses<br />";
        $separatedcourses = strtok(";");
    }

//comparing strings
//first
    $firstletter = "A";
    $secondletter = "B";
    if ($secondletter > $firstletter)
    echo "<p> The second letter occurs later in the alphabet than the first letter</p>";
    else
    echo "<p>The second letter occurs earlier in the alphabet than the first letter</p>";
   

//second using strcmp and strcasecmp
    $strcompare = strcasecmp("Don","don"); //strcasecmp: pareho char, return 0
    $strcompare2 = strcmp("Don","don");  //strcmp: return kung ilan naiiba
    echo "strcasecmp: " . $strcompare;
    echo "<br>";
    echo "strcmp: " . $strcompare2;
    echo "<br>";
    echo "<br>";

//determining similarity of string
    $firstname = "Don";
    $secondname = "don";
    echo "<p>The names \"$firstname\" and \"$secondname\" have" . similar_text($firstname, $secondname) . 
    "characters in common. </p>";
    echo "<p>You must change " . levenshtein($firstname, $secondname) . " character(s) to make the
    names \"$firstname\" and \"$secondname\" the same.</p>"; 
    //levenshtein: identify kung ilan papalitan para maging same ang output ng char

//determining words pronounce similarly (phonetic and metaphone)
    $firstname2 = "Gosselin";
    $secondname2 = "Gauselin";
    $firstnameSoundsLike = soundex($firstname2); //soundex = phonetic euivalent
    $secondnameSoundsLike = soundex($secondname2);

    if($firstnameSoundsLike == $secondnameSoundsLike)
    echo "<p>The names are pronounced the same</p>";
    else
    echo "<p>The names are not pronounced the same</p>";

//regular expression
    $string = "Course Technology";
    if(preg_match("/course technology/", $string)) //encode string
    echo "<p>Match found</p>";
    else
    echo "<p>Match not found</p>";

//matching any character
    $ZIP = "2002";
    if(preg_match("/..../", $ZIP) == 0)
        echo "<p>Format did not match</p>";
    
    else
        echo "<p>Format match</p>";
    
    $IDENTIFIER = "https://www.google.net";
    if (preg_match("/com$/", $IDENTIFIER) == 0){
        echo "<p>Format did not match</p>";
    }
    else{
        echo "<p>Format match</p>";
    }
    ?>
