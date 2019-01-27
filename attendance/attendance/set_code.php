<?php
include 'db_check.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Set code</title>
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
	
			$subject = $_SESSION['subject'];
			// echo $code;
			// echo $subject;

	if (isset($_POST['active'])) {
		if (isset($_POST['code'])) {
			$code = $_POST['code'];

			$sql = "UPDATE `attendence`.`flags` SET `code` = '$code' , `value` = '1' WHERE `flags`.`flag_id` = '$subject';";
			$res = mysql_query($sql);
			if($res){
				echo '<script language="javascript">';
				echo 'alert("Attendence is active")';
				echo '</script>';
				$_SESSION['activeTrue'] = '1';
			}else{
				echo '<script language="javascript">';
				echo 'alert("error occured Try again")';
				echo '</script>';
			}
		}
		
	}
	elseif (isset($_POST['deactive'])) {
		$sql = "UPDATE `attendence`.`flags` SET `code` = ' ' , `value` = '0' WHERE `flags`.`flag_id` = '$subject';";
			$res = mysql_query($sql);

			if($res){
				echo '<script language="javascript">';
				echo 'alert("Attendence is DEACTIVE")';
				echo '</script>';
				$_SESSION['activeTrue'] = '0';
			}else{
				echo '<script language="javascript">';
				echo 'alert("error occured Try again")';
				echo '</script>';
			}
	}


}

?>


	<div class="container" style="margin-top: 10px;">
		<div class="jumbotron" style="padding: 10px; background-color: #7ea5e5">
			<h1 style="text-align: center; font-size: 3em;">Instant Attendence - Code</h1>
		</div>
		<div class="jumbotron" style="background-color: #acc1e5; padding: 10px;">
			 <p style="padding-left: 10%;">Name : <?php echo $user_name; ?> <br/>
			 Subject :  <?php echo $_SESSION['subject']; ?>
			 </p>
		</div>


		<div class="jumbotron" style="background-color: <?php if ($_SESSION['activeTrue']=='1') {
			echo "rgba(10,230,10,0.8)";
		}
		else{
			echo "rgba(230,20,10,0.8)";}
			?>; padding: 10px;">
			

			<form method="POST" action="set_code.php" style="padding-left: 10%; padding-right: 5%;"> 
			
		
	
			
				<div class="form-group">
					<label class="control-label" >Enter Code</label>
					<input class="form-control" name = "code" type="text" required="True" value="<?php if(isset($_POST['code'])) {echo $_POST['code'];}?>">


					<button class="btn btn-success" name="active" type="submit">Activate</button>
					

					<button class="btn btn-primary" name="deactive" type="submit">Deactivate</button>					
				</div>
			</form>
			
			
		</div>
	</div>

</body>
</html>

