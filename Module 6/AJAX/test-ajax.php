<!DOCTYPE html>
<html>
<head>
	<title>PHP - AJAX</title>
</head>
<body>
<style type="text/css">
	.ajax_php_font{ 
		color:#F60; 
		font-weight:bold; 
		font-style:italic; 
		font-size:16px;
		}
</style>
<script type="text/javascript">
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("lan_name").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("lan_name").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "get_data.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<h4>Search  your tutorial in the input field below :</h4>
<form> 
Tutorial Name: <input type="text" onkeyup="showHint(this.value)">
</form>

<p>Your tutorial name is : <span id="lan_name" class="ajax_php_font"></span></p>
<h2>Thank you for using our application, we hope you enjoyed it</h2>

</body>

