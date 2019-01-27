<?php
include 'db_check.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	 <!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="inc/bootstrap/css/bootstrap.min.css">

<script src="inc/jquery.js">
</script>

	</head>
<body>


<?php
 session_start(); 

if (!isset($_SESSION['student_id']))
{

echo "<script> alert( \'Log in first \'); </script> ";


			header("Location: student_login.php"); 

}
else{
	$user_name = $_SESSION['student_id'];
	//  $sql= "SELECT * FROM `attendence`.`student_login` WHERE `userName`='$user_name' ; ";
 //  	$result=mysql_query($sql);

 // $field=mysql_fetch_assoc($result);
	// $phone_number = $field["pNo"];
	// $department = $field["dept"];



	if (isset($_POST["subject"]) && isset($_POST["date"])) {


		$_SESSION["subject"] = $_POST["subject"];
		$_SESSION["date"] = $_POST["date"];
		$date = $_POST["date"];
		$subject = $_POST["subject"];
		header("Location: student_marker.php"); 

		// $_SESSION['rollNumber'] = 1; 

		// $sql1 = "ALTER TABLE `$subject` ADD `$date` VARCHAR(20) NOT NULL ;" ;
		// echo $sql1;
		


		
	}
}

?>


	<div class="container" style="margin-top: 10px;">
		<div class="jumbotron" style="padding: 10px; background-color: #7ea5e5">
			<h1 style="text-align: center; font-size: 3em;">Dashboard</h1>
		</div>
		<div class="jumbotron" style="background-color: #acc1e5; padding: 10px;">
			 <p style="padding-left: 10%;">Roll No : <?php echo $user_name; ?> <br/>
			 <!-- Contact : <?php echo $phone_number; ?> <br/>
			 Department : <?php echo $department; ?> <br>
			 Subjects:<ul style="margin-left: 15%;">
			 <?php
			 	$round=count($p);
			 	for($x=0;$x<$round;$x++){
			 		echo "<li>$p[$x]</li>";
			 	}
			 ?>
			 </ul> -->
			 </p>
		</div>


		<div class="jumbotron" style="background-color: #b9c9e5; padding: 10px;">
			<h2 style="padding-left: 10%;">Let's Start</h2>


			<form method="POST" action="student_dashboard.php" style="padding-left: 10%; padding-right: 5%;"> 
			
		<div class="form-group">
  <label for="sel1">Select subject</label>
  <select class="form-control" id="sel1" name="subject">
    <option value="computer_network">computer network</option>
    <option value="operating_system">operating system</option>
    <option value="network_security">network security</option>
    <option value="computer_graphics">computer Graphics</option>
    <option value="cv_image_processing">CVIP</option>
    <option value="db_management_system">DBMS</option>
    <!-- <option value="network_security">network security</option> -->

  </select>
</div>
				<!-- <button class="btn btn-primary dropdown toggle" type="button" data-toggle="dropdown" name="subject1">Select the Subject <span class="caret"></span></button><br>
				<input type="text" name="subject" value="enter subject" -->

	
			
				<div class="form-group">
					<label class="control-label" for="date" >Date</label>
					<input class="form-control" id="date" name = "date" type="text" name="date" placeholder="DDMMYY" required="True">

					<button class="btn btn-primary" name="submit" type="submit">Submit</button>
					<br><a href="student_login.php">login_student</a> 
			<br>
			<a href="logout.php">logout</a>
				</div>
			</form>
			
		 
		</div>
	</div>

</body>
</html>

