<!DOCTYPE html>
<html>
    <head>
        <title>Module 01 - Machine Problem 01</title>
    </head>

    <body>

        <?php
            echo "<p><b>PERSONAL INFORMATION</b></p>";
            echo "<p>Name: ";
            define("NAME", "Jesus Luigi M. Sison<br>"); 
            echo NAME;
            echo "<p>Birthday: ";
            define("BIRTHDAY", "February 15, 2000<br>");
            echo BIRTHDAY;
            echo "<p>Gender: ";
            define("GENDER","Male");
            echo GENDER;
            echo "<p>Home Address: ";
            define("HOME_ADDRESS","Tinang Concepcion, Tarlac");
            echo HOME_ADDRESS;
            echo "<p>Email Address: ";
            define("EMAIL_ADDRESS","luigi360swirl@gmail.com");
            echo EMAIL_ADDRESS;

            echo "<p><b>FAMILY BACKGROUND</b></p>";
            echo "<p>Father's Name: ";
            define("F_NAME", "Joselito D. Sison");
            echo F_NAME;
            echo "<p>Father's Name: ";
            define("M_NAME", "Liberty M. Sison");
            echo M_NAME;
            echo "<p>Sibling 1 Name: ";
            $sibling = array("Joseph Lawrence M. Sison","Ma. Jyra Lou M. Sison");
            echo "$sibling[0]<br />";
            echo "<p>Sibling 2 Name: ";
            echo "$sibling[1]<br />";

            echo "<p><b>EDUCATIONAL BACKGROUND</b></p>";
            echo "<p>Primary School: ";
            define("PR_SCHOOL","Montessori School of St. Nicholas");
            echo PR_SCHOOL;
            echo "<p>Date Graduated: ";
            define("gr_date1","April 2012");
            echo gr_date1;
            echo "<p>Junior High School: ";
            define("JHS","DBTI Tarlac");
            echo JHS;
            echo "<p>Date Graduated: ";
            define("gr_date2","April 2016");
            echo gr_date2;
            echo "<p>Senior High School: ";
            define("SHS","DBTI Tarlac");
            echo SHS;
            echo "<p>Date Graduated: ";
            define("gr_date3","April 2012");
            echo gr_date3;
            echo "<p>Tertiary School: ";
            define("TER","Angeles University Foundation");
            echo TER;
            echo "<p>Course: ";
            define("cou","BSCpE");
            echo cou;
        
            

            echo "<p><b>FAVORITE FOODS</b></p>";
            $fav_food = array("Chicharon", "Kilayin", "Sashimi", 
            "Giniling na Baboy", "Inihaw na Pusit");
            {
                echo "$fav_food[0]<br />";
                echo "$fav_food[1]<br />";
                echo "$fav_food[2]<br />";
                echo "$fav_food[3]<br />";
                echo "$fav_food[4]<br />";
            }
            echo "<p><b>FAVORITE MOVIES</b></p>";
            $fav_film = array("Ratatouille", "Shawshank Redemption", "Avengers: Endgame", 
            "Jumanji", "Guardians of the Galaxy");
            {
                echo "$fav_film[0]<br />";
                echo "$fav_film[1]<br />";
                echo "$fav_film[2]<br />";
                echo "$fav_film[3]<br />";
                echo "$fav_film[4]<br />";
            }
            echo "<p><b>FAVORITE SONGS</b></p>";
            $fav_song = array("Ang Huling El Bimbo", "Silhouette", "Panalo", 
            "Everybody", "New Flame");
            {
                echo "$fav_song[0]<br />";
                echo "$fav_song[1]<br />";
                echo "$fav_song[2]<br />";
                echo "$fav_song[3]<br />";
                echo "$fav_song[4]<br />";
            }

        ?>
    </body>
</html>