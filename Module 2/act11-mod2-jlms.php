<!DOCTYPE html>
<html>
    <head>
        <title>OPERATOR and CONTROL STATMENTS</title>
    </head>

    <body>

        <?php
            $arrstud = array(
                array(
                    "Firstname" => "Jesus Luigi",
                    "Lastname" => "Sison",
                    "Course" => "Bachelor of Science in Computer Engineering",
                    "Year Level" => "Third Year",
                    "Prelim Grade" => 87,
                    "Midterm Grade" => 92,
                    "Final Grade" => 92,
                ),
                array(
                    "Firstname" => "LaMarcus",
                    "Lastname" => "Durant",
                    "Course" => "Bachelor of Science in Kinetic Education",
                    "Year Level" => "Second Year",
                    "Prelim Grade" => 88,
                    "Midterm Grade" => 92,
                    "Final Grade" => 82,
                ),
                array(
                    "Firstname" => "Kevin",
                    "Lastname" => "Irving",
                    "Course" => "Bachelor of Science in Psychology",
                    "Year Level" => "Third Year",
                    "Prelim Grade" => 81,
                    "Midterm Grade" => 82,
                    "Final Grade" => 83,
                ),
                array(
                    "Firstname" => "James",
                    "Lastname" => "Griffin",
                    "Course" => "Bachelor of Science in Criminology",
                    "Year Level" => "Fourth Year",
                    "Prelim Grade" => 91,
                    "Midterm Grade" => 97,
                    "Final Grade" => 93,
                ),
                array(
                    "Firstname" => "Blake",
                    "Lastname" => "Harden",
                    "Course" => "Bachelor of Science in Business Management",
                    "Year Level" => "First Year",
                    "Prelim Grade" => 91,
                    "Midterm Grade" => 85,
                    "Final Grade" => 88,
                ),
            );

            echo "<b>G r a d e R e p o r t </b><br />";

            //get the array size
            $arrcount = count($arrstud);

            //using the forloop and foreach
            for($ctr=0; $ctr < $arrcount; $ctr++){
                foreach($arrstud[$ctr] as $key => $value)
                {
                    echo $key . " : " . $value . "<br>";
                }
                $dblgrade = ($arrstud[$ctr]["Prelim Grade"] + $arrstud[$ctr]["Midterm Grade"] + $arrstud[$ctr]["Final Grade"])/3;
                echo "Subject Grade: " . $dblgrade . "<br>";
                echo "<br>";
            }
        ?>
    </body>
</html>