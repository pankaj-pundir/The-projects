<?php
include 'db_check.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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

if (!isset($_SESSION['user']))
{

echo "<script> alert( \'Log in first \'); </script> ";


			header("Location: signup.php"); 

}
else{
	$user_name = $_SESSION['user'];
	 $sql= "SELECT * FROM `attendence`.`faculty_login` WHERE `userName`='$user_name' ; ";
  	$result=mysql_query($sql);

 $field=mysql_fetch_assoc($result);
	$phone_number = $field["pNo"];
	$department = $field["dept"];



	if (isset($_POST["subject"]) && isset($_POST["date"])) {
					$_SESSION["subject"] = $_POST["subject"];
					$_SESSION["date"] = $_POST["date"];
					$date = $_POST["date"];
					$subject = $_POST["subject"];
					$_SESSION['rollNumber'] = 1; 
					// echo '<script language="javascript">';
					// 	echo 'alert("$_POST["submit"]")';
					// 	echo '</script>';

									
					$sql1 = "ALTER TABLE `$subject` ADD `$date` VARCHAR(20) NOT NULL ;" ;
					// echo $sql1;
					$resultAdd=mysql_query($sql1);
								if($resultAdd){
									echo '<script language="javascript">';
										echo 'alert("New Table added")';
									echo '</script>';
									if ( isset($_POST['instant'])) {

										header("Location: set_code.php");
									}
									header("Location: attendenceMarker.php"); 
								}
					else{
						echo '<script language="javascript">';
						echo 'alert("table already present really")';
						echo '</script>';
						header("Location: attendenceMarker.php");
						if ( isset($_POST['submit'])) {

										header("Location: attendenceMarker.php");
									}

						if ( isset($_POST['instant'])) {

										header("Location: set_code.php");
									}
						 
					}


		
	}
}

?>

<?php
		// session_start();
		// $username=$_POST["user"];
		$sql="SELECT * from `attendence`.`faculty_subject` where `userName`='$user_name'; ";
		$result= mysql_query($sql);
		$p=array();
		while($field=mysql_fetch_assoc($result)){
			// $contact=$field[`contact`];
			// $dept=$field[`dept`];
			if($field['computer_graphics']==1){
				array_push($p,"computer_graphics");
			}
			if($field['computer_network']==1){
				array_push($p,"computer_network");
			}
			if($field['db_management_system']==1){
				array_push($p,"db_management_system");
			}
			if($field['operating_system']==1){
				array_push($p,"operating_system");
			}
			if($field['network_security']==1){
				array_push($p,"network_security");
			}
			if($field['cv_image_processing']==1){
				array_push($p,"CV_image_processing");
			}

		}
		
	?>

	<div class="container" style="margin-top: 10px;">
		<div class="jumbotron" style="padding: 10px; background-color: #7ea5e5">
			<h1 style="text-align: center; font-size: 3em;">Dashboard</h1>
		</div>
		<div class="jumbotron" style="background-color: #acc1e5; padding: 10px;">
			 <p style="padding-left: 10%;">Name : <?php echo $user_name; ?> <br/>
			 Contact : <?php echo $phone_number; ?> <br/>
			 Department : <?php echo $department; ?> <br>
			 Subjects:<ul style="margin-left: 15%;">
			 <?php
			 	$round=count($p);
			 	for($x=0;$x<$round;$x++){
			 		echo "<li>$p[$x]</li>";
			 	}
			 ?>
			 </ul>
			 </p>
		</div>


		<div class="jumbotron" style="background-color: #b9c9e5; padding: 10px;">
			<h2 style="padding-left: 10%;">Let's Start</h2>


			<form method="POST" action="dashboard.php" style="padding-left: 10%; padding-right: 5%;"> 
			
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
					<input class="form-control" id="date" name = "date" type="text" name="date" placeholder="DDMMYY">

					<button class="btn btn-primary" name="submit" type="submit" value="submit">Submit</button>
					<hr>
					<button class="btn btn-success" name="instant" value="instant"  type="submit">Instant Attendence</button><br>
					<a href="logout.php">logout</a>
				</div>
			</form>
			 
			
		</div>
	</div>

</body>
</html>

