<?php
include "db_check.php";

$servername = "localhost";
$username = "root";
$password = "";
$branch="cse";
$batch="16";
$entry="012";
$date_code="01092017";
$no_code ="bt".$batch.$branch.$entry;
// Create connection

//$conn = mysql_connect($servername, $username, $password);
//for ($i=10;$i<99;$i++){
//$sql="INSERT INTO `attendence`.`data_16` (`no`,`01092017`) VALUES ('bt16cse002','1')  ";
$sql="UPDATE `attendence`.`data_$batch` SET `data_$batch`.`$date_code`='1' WHERE `data_$batch`.`no`='$no_code' ";
echo $sql;
//$s="insert into data_16 (01092017) values(1) where 'no'=bt16cse009 ";
$res=mysql_query($sql);
echo $res;
//$check_row=mysql_query($s);
// if (mysql_num_rows($check_row)==NULL) {
// 	# code...
// 	echo "<b>row not found </b>";
// }
// else {
if($res){
echo "\n Your Data Inserted";
}
else {echo "another error occured ";}
//}

?>