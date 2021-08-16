<!DOCTYPE html>
<html>
    <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>
            Web Template
        </title>
    </head>
    <body>
         <?php include("inc_header.html"); ?>
        <div style="padding:10px; text-align: left;  background-color:#aaa; position:relative">
        <?php 
        include("inc_button.html");
        ?>
        
    </div>

<!-- Start of Dynamic Content section -->
<?php 

if(isset($_GET['content'])){
    switch ($_GET['content']){
        case 'Admission':
            include('inc_admission.html');
            break;

            case 'Academics':
                include('inc_academics.html');
                break;
                
                case 'Programs':
                    include('inc_program.html');
                    break;

                case 'Students':
                    include('inc_students.html');
                    break;

                case 'Register':
                    include('inc_registration.php');
                    break;        
                               
                case 'Home':
                  
                    default:
                        include ('inc_home.html');
                        break;
    }
}
else
include ('inc_home.html')
?>

<?php include("inc_footer.php"); ?>

   
      
    </body>
</html>