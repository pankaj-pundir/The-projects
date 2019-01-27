<?php
$servername='localhost';
$password='';
$username='root';
//creatinig connection 

$connection= mysql_connect($servername,$username,$password);
$db_name="spark";
$db= mysql_select_db($db_name,$connection);
if($db)
{
echo " database connected   <b> $db_name </b><br>";

}
if(!$connection)
	{
//failed to connect
die('connection failed');
mysqli_connect_error();

	}
else echo "connection established with <b>".$servername."</b>";
?>