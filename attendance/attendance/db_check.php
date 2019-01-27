<style type="text/css">
.footer {
	/*font-weight: bold;*/
	/*font-family:'tisa';*/
    position: fixed; 
    bottom: 0;
    left: 0;
    right: 0;
    height: 5%;
    background-color: rgba(100,100,140,0.9);
}

</style>
<footer class="footer" style="text-align: right; padding: 1%; margin: 1%;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="attendence";
// Create connection

if (mysql_connect($servername, $username, $password) {
   echo '<script language="javascript">';
	echo 'alert(" Database not connected")';
	echo '</script>';
	exit();
}


$conn = mysql_connect($servername, $username, $password);


$db= mysql_select_db($db_name,$conn);
// Check connection

if($db){
echo "<span><a href=\"index.html\">HomePage</a></span><span class='active' style=\"color: rgba(0,200,0,0.8); font-size:100%; \">status :  Active </span> ";}
?>

</footer>