<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Web Template</title>
    </head>

    <body>

    <?php
        include("inc_header.html");
        
    ?>

    <div style="width:20%; text-align:center; float: left; background-color:#aaa">

    <?php
        include("inc_button.html");
        
    ?>

    <?php
        if(isset($_GET['content'])){
            switch ($_GET['content']){
                case 'About Us':
                    include('inc_about.html');
                    break;

                    case 'Contact':
                        include('inc_contact.html');
                        break;

                        case 'Sign Up':
                            include('inc_registration.php');

                case 'Home':
                    default:
                        include("inc_home.html");
                        break;

            }
        }
        else
        include ('inc_home.html');
    ?>

    <?php include("inc_footer.php");
        
    ?>

    </div>
    </body>
</html>