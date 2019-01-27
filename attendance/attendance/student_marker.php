<?php
include 'db_check.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student marker</title>
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
	$subject = $_SESSION['subject'];
	$date = $_SESSION['date'];
	$sql= "SELECT * FROM `attendence`.`flags`  WHERE `flag_id`='$subject' ; ";
  	$result=mysql_query($sql);
	$field=mysql_fetch_assoc($result);
	$value = $field["value"];

	if (! $value=='1') {
		echo '<script language="javascript">';
			echo 'alert("Faculty must activate the attendence")';
			echo '</script>';
	}
 // $field=mysql_fetch_assoc($result);
	// $phone_number = $field["pNo"];
	// $department = $field["dept"];



	if (isset($_POST["code"])) {
		$sql="SELECT * from `attendence`.`flags` where `flag_id`='$subject'; ";
		$result= mysql_query($sql);
		$field=mysql_fetch_assoc($result);
		$code = $field["code"];
		// $date = $_POST["date"];
		// $subject = $_POST["subject"];
		if ($code == $_POST['code']) 
						{
							// echo $date;
							// echo $user_name;
							// echo $subject;
							$sql=" UPDATE `attendence`.`$subject` SET `$date` = '1' where `student_id`='$user_name'; ";
						$result= mysql_query($sql);
						if ($result) {
							echo '<script language="javascript">';
							echo 'alert("successful")';
							echo '</script>';

							header("Location: student_dashboard.php");
						}
						else{
							echo '<script language="javascript">';
							echo 'alert("some error occured")';
							echo '</script>';

						}
						}
		else{
			echo '<script language="javascript">';
			echo 'alert("code incorrect")';
			echo '</script>';

		}

		
		


		
	}
}

?>


	<div class="container" style="margin-top: 10px;">
		<div class="jumbotron" style="padding: 10px; background-color: #7ea5e5">
			<h1 style="text-align: center; font-size: 3em;">Dashboard</h1>
		</div>
		<div class="jumbotron" style="background-color: #acc1e5; padding: 10px;">
			 <p style="padding-left: 10%;">Roll No : <?php echo $user_name; ?> <br/>
			 Subject : <?php echo $subject; ?> <br/>
			 Date : <?php echo $date; ?> <br>
			 

			 </p>
		</div>


		<div class="jumbotron" style="background-color: #b9c9e5; padding: 10px;">
			<h2 style="padding-left: 10%;">Enter Code</h2>


			<form method="POST" action="student_marker.php" style="padding-left: 10%; padding-right: 5%;"> 
			
		
				<!-- <button class="btn btn-primary dropdown toggle" type="button" data-toggle="dropdown" name="subject1">Select the Subject <span class="caret"></span></button><br>
				<input type="text" name="subject" value="enter subject" -->

	
			
				<div class="form-group">
					<label class="control-label"  >Enter Code :</label>
					<input class="form-control" name = "code" type="text" placeholder="Code">

					<button class="btn btn-primary" name="submit" type="submit">Submit</button>
				</div>
			</form>
			
			
		</div>
	</div>

</body>
</html>

