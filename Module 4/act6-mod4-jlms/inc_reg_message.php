<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Registration Message</title>
</head>

<body>
    <h1>Registration</h1>

<?php

if(isset($_POST['Submit'])){
    $studNUM = $_POST["studnum"];
    $sname = $_POST["sname"];
    $course = $_POST["course"];
    $yrlevel = $_POST["yrlevel"];
    $section = $_POST["section"];
    $email = $_POST["email"];
    $bdate = $_POST["bdate"];
    $gender = $_POST["gender"];
}

        echo "Student ID: <b>$studNUM</b> <br>";
        echo "Full Name: <b>$sname</b> <br>";
        echo "Course: <b>$course</b> <br>";
        echo "Year Level: <b>$yrlevel</b> <br>";
        echo "Section: <b>$section</b> <br>";
        echo "E-Mail Address: <b>$email</b> <br>";
        echo "Gender: <b>$gender</b> <br>";
        echo "Birthdate: <b>$bdate</b> <br>";   

    elseif (empty($_POST['submit'])){
        echo "Some inputs missing. Try again!";
    }
?>

</body>
</html>