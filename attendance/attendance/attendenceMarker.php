
<!-- Connecting the database -->

<?php
include 'db_check.php';
?>



<?php

// INSERT INTO `attendence`.`computer_network` (`student_id`) VALUES ('BT16CSE001');


//  inserting data in the table dataase 

// $sub_name = "student_login";
// for ($i=1; $i < 10; $i++) { 
// 	$name = "BT16CSE00".$i;
// 	echo $name;
// 	echo "<br>";
// 	$sql = "INSERT INTO `attendence`.`$sub_name` (`student_id`,`password`) VALUES ('$name','$i');";
// 	mysql_query($sql);
// }
// for ($i=10; $i < 63; $i++) { 
// 	$name = "BT16CSE0".$i;
// 	echo $name;
// 	echo "<br>";
// 	$sql = "INSERT INTO `attendence`.`$sub_name` (`student_id`,`password`) VALUES ('$name','$i');";
// 	mysql_query($sql);
// }
// echo "completed the entry";

session_start();
// if(isset($_SESSION['log']))


// {
//   if($_SESSION['log']==2){

//   echo "<div class='alert container alert-info alert-dismissible' role='alert'> you have to log In first .. </div>";
// }
// }

if (!isset($_SESSION['user']))  
{ 
			header("Location: attendenceMarker.php"); 

}
	// echo "<br><b>working on code</b>";
  # code...
$date = $_SESSION['date'];
$subject = $_SESSION['subject'];
$roll = $_SESSION['rollNumber']; 
// echo $date;
if ($roll > 62) {
	header("Location: completed.php");
}
// echo $subject;
				
				if ($roll < 10) {
					$realRoll = "BT16CSE00".$roll;
				}
				elseif ($roll >= 10) {
					$realRoll = "BT16CSE0".$roll;
				} 
				
if (isset($_POST['btnpresent'])) {
	
	$sql = "UPDATE `$subject` SET `$date` =1 WHERE `student_id`='$realRoll' ;";


	// $sql = "UPDATE `$subject` SET `$date`= 0, WHERE `student_id` = '$realRoll' ; ";
	mysql_query($sql);
	$_SESSION['rollNumber'] = $_SESSION['rollNumber'] + 1;

	// $_SESSION['rollNumber'] = $_SESSION['rollNumber'] + 1;
}
elseif (isset($_POST['btnabsent'])) {


	$sql = "UPDATE `$subject` SET `$date` =0 WHERE `student_id`='$realRoll' ;";


	// $sql = "UPDATE `$subject` SET `$date`= 0, WHERE `student_id` = '$realRoll' ; ";
	mysql_query($sql);
	$_SESSION['rollNumber'] = $_SESSION['rollNumber'] + 1;
}
elseif (isset($_POST['finish'])) {
	header("Location: completed.php");
}

// echo $_SESSION['rollNumber'];


?> 


<!DOCTYPE html>
<html>

<!-- Head part -->
<head>
<meta charset="utf-8">
<meta name="author" content="pankaj-pundir">

	<title> <?php  echo $_SESSION['user']; ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="inc/bootstrap/css/bootstrap.min.css">

<script src="inc/jquery.js">


</script>
</head>

<!-- Body part -->


<body>

<style type="text/css">
	
.texty{
	font-family: "times New Roman";
	font-weight: bold;


}

</style>
<div class ="jumbotron" style="height: 1%; width: 100%; background-color:rgba(44,26,209,0.8); font-family:algerian; font-weight: bold ; ">
<center><span><h3>Attendence </h3></span></center>
</div>
<h3>
<div class="jumbotron texty" style="margin-left: 10%; margin-right: 10%; font-size: 50%">
	
	<label >Faculty Name : <?php echo $_SESSION["user"]; ?></label><br>
	<label>Subject : <?php echo $_SESSION["subject"]; ?></label><br>
	<label>Date : <?php echo $_SESSION["date"]; ?></label><br>
</div>
</h3>
<!-- <script type="text/javascript">

	$(document).ready(function() {

 $("#btnpresent").click(function(){
    	
    	});

    $("#btnabsent").click(function(){
        alert("button");
    }); 
		});

  
    

</script> -->


<div class="jumbotron" style="margin-left: 10%; margin-right: 10%;">
<form method="post">
				<h2><center><div class="form-group">
				ID: <label id="student_id"><?php $roll = $_SESSION['rollNumber']; 
				if ($roll < 10) {
					$realRoll = "BT16CSE00".$roll;
				}
				elseif ($roll >= 10) {
					$realRoll = "BT16CSE0".$roll;
				} 
				echo $realRoll;
				 ?></label>
			</h2><br>
			</center><center>
				<button name="btnpresent" class="btn btn-success" style="margin-left: 10%; " type="submit"> Present </button>
				<button name="btnabsent" class="btn btn-warning" style=" margin-right: 10%;" type="submit"> Absent </button>

				</center>
				<br>
				<button class="btn btn-primary" name="finish" type="submit" style="margin-bottom: 2%; float: right;">Submit</button>
			
				<!-- 
					<label class="control-label" for="date" style="padding-left: 10%;">Date</label>
					<input class="frm-control" id="date" type="text" name="date" placeholder="MM/DD/YYY">
				 -->	
				</div>
				</form>

</div>

</div>
</div>
</body>



</html>

