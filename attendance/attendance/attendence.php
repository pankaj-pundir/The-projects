<?php
include 'db_check.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>attendence </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="inc/bootstrap/css/bootstrap.min.css">

<script src="inc/jquery.js">


</script>
</head>
<body>

<style type="text/css">
.active{
	color: rgba(10,200,10,1);
	text-shadow: 3px 3px 2px grey;
	font-size: 200%;
}
.my1{
	position: static;
}
.right {
    
    right: 0px;
    width: 100px;
    border: 3px solid #73AD21;
    padding: 5px;
}

.done_alert{
	float: right;
	margin-top: 10%;
	margin-right: 5%; 
	background-color: rbga(0,200,20,0.9);
	color: green;
}


.heading{
	font-family: Georgia;
	color: #ff1110;
	font-weight: bold;
	font-size: 150%;


}
</style>


<div class ="my1" style="height: 10%; width: 100%; background-color:rgba(44,26,209,0.8); font-family:algerian; font-weight: bold ;font-size:10px; overflow: auto;">
	<center><span><h1>Attendence </h1></span></center>
	
</div>
<div id="my2" class="jumbotron" style="height: 30%; border: 3px solid blue; width:90%; margin:2% ; height:80%;  overflow: auto;">


<script type="text/javascript">
	$("#form_attendence").hide();
</script>
<!-- user login -->


<div id="login1" class=" form-group" >
<center>
	<span class="heading">USERNAME</span> <input style="width: 50%;" class=" form-control" type="text" id="user_name" required="True"><br>
	<span class="heading">Password</span><input style="width: 50%;" class=" form-control" type="password" id="password" required="True"><br> <br>
	<button class="btn btn-success" onclick="login_check()">CHECK IN</button>
</center>
</div>


<script type="text/javascript">

$(function(){
		$("#form_attendence").hide();
	});
	function login_check(){
		
		if($("#user_name").val()=="alvin" && $("#password").val()=="pankaj"){
			
			$("#form_attendence").fadeToggle(500);
			$("#login1").hide();
		
		}
		else {
			alert("Incorrect login details ");
			
		}
	}

</script>


<!-- user login end -->
<form id="form_attendence" method="POST" style="margin: 10%; font-size: 130%; font-weight: bold;" class=" form-group" action="attendence.php" onsubmit="return checky()">
	<span class="heading">DATE-CODE:</span><input type="text" class=" form-control" name="date_code" placeholder="eg for 22/08/2017 enter 22082017" value="01092017"><br>
	<center>
	<span class="heading">BRANCH:</span>
	<input type="radio" name="branch" value="cse" checked>CSE
	<input type="radio" name="branch" value="ece">ECE
	<input type="radio" name="branch" value="eee">EEE
	<input type="radio" name="branch" value="civ">CIV
	<input type="radio" name="branch" value="mec">MEC<br><br>
	<span class="heading">BATCH:	</span>
	<input type="radio" name="batch" value="17">2017
	<input type="radio" name="batch"  checked value="16">2016
	<input type="radio" name="batch" value="15">2015
	<input type="radio" name="batch" value="14">2014<br><br>
	<span class="heading">ENTRY:</span>	<input class=" form-control" autofocus type="number" name="entry" id="e" ><br>
	<input type="submit" class="btn btn-success" value="Submit">
	<br>
</form>
<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
if(isset($_POST['branch'])&&isset($_POST['entry'])){


$conn = mysqli_connect($servername, $username, $password);
$branch=$_POST['branch'];
$batch=$_POST['batch'];
$entry=$_POST['entry'];
$date_code=$_POST['date_code'];
$no_code ="bt".$batch.$branch.$entry;


//$s="insert into data_$batch ($date_code) values(1) where 'no'=$no_code ";
$sql="UPDATE `attendence`.`data_$batch` SET `data_$batch`.`$date_code`='1' WHERE `data_$batch`.`no`='$no_code' ";
//echo $sql;
$res=mysql_query($sql);
if ($res) {
	# code...
	echo "<p class=\"done_alert\"> Your Data Inserted </p>";
}
else {echo "\n error occured";}

}


?>
</center>
</div>



<script type="text/javascript">
function checky(){
	var a=$("#e").val();
	if(a=='')

	{
		alert("entry is not provided");
		return false;
	}

	else {
	 return true; }


}



</script>

</body>
</html>
