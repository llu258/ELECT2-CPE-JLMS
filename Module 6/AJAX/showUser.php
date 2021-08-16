<!DOCTYPE html>
<html>
    <head>
        <title>
         AJAX-PHP-MySQL
        </title>
        <script>
            function showUser(str) {
                if(str == ""){
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status ==200){
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","getuser.php?q="+str, true);
                xmlhttp.send();
            }
            }
            </script>
    </head>
    <body>

<form>
<select name="users" onchange="showUser(this.value)">        
<?php
include('servercon.php');

$sql = mysqli_query($dbconnect, "SELECT ID, username, email from users" );
while ($row = $sql->fetch_assoc()){
    echo "<option value=" . $row['ID'] . ">" . $row['username'] . "</option>";
 }
?>
  </select>   
</form> 
  <div id="txtHint"><b>Person info will be listed here...</b></div>
        </body>
</html>