<?php
// Array with tutorials
$a[] = "C Language";
$a[] = "C++";
$a[] = "Bootstrap";
$a[] = "HTML5";
$a[] = "HTML";
$a[] = "CSS";
$a[] = "CSS3";
$a[] = "JAVA";
$a[] = "JavaScript";
$a[] = "jQuery";
$a[] = "PHP";
$a[] = "MySQL";
$a[] = "SQL";
$a[] = "Adv Java";
$a[] = "Python";
$a[] = "AngularJS";
$a[] = "Photoshop";
$a[] = "C#";
$a[] = "ASP.NET";
$a[] = "SAP";
$a[] = "ORACLE";
$a[] = "Wordpress";
$a[] = "Android";
$a[] = "iOS";
$a[] = "SEO";
$a[] = "Illustrator";
$a[] = "Flash";
$a[] = "Action Script";


$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
// Output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>