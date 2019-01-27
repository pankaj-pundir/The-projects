<?php
include 'db_check.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Attendence</title>

	<?php 
		session_start(); 

	?>

<link rel="stylesheet" type="text/css" href="inc/bootstrap/css/bootstrap.min.css">

<script src="inc/jquery.js">


</script>

</head>s

<body>
	<div class="container" style="margin-top: 10px;">
		<div class="jumbotron" style="padding: 10px; background-color: #7ea5e5">
			<h1 style="text-align: center; font-size: 3em;">Welcome to attendance display page</h1>
		</div>
		<form method="POST" action="view.php">
		<div class="jumbotron" style="background-color: #acc1e5; padding:5%;">
			  	<label for="sel1">Select subject</label>
			  	<select class="form-control" id="sel1" name="subject">
			    <option value="computer_network">computer network</option>
			    <option value="operating_system">operating system</option>
			    <option value="network_security">network security</option>
			    <option value="computer_graphics">computer Graphics</option>
			    <option value="cv_image_processing">CVIP</option>
			    <option value="db_management_system">DBMS</option>
</select>
Date: <input type="text" name="date" class="form-control" placeholder="DDMMYY">

<br>
<button type="submit" class="btn btn-success">Submit</button>


</form>
				<?php
				
				
				if(isset($_POST["subject"]))
				{
					$table=$_POST["subject"];
				$date=$_POST["date"];
					// echo $table;
					// echo $date;
					$sql="SELECT `student_id`,`$date` from `$table` ;";
					echo "
					<center>
					<h2> $table - $date </h2> 
					<table  border= \"2\" style=\" box-shadow: 2px 3px 10px grey;\"><tr>
					<thead>
								<th style=\" background-color: rgba(100,100,200,0.4);  text-align: center; width:300px;\">Roll no</th>
								<th style=\" background-color: rgba(100,100,200,0.4); text-align: center; width:200px \">Attendence</th>
								

							
								
								</thead>
								</tr>
							";
					$result = mysql_query($sql);
					if (!$result) {
						echo '<script language="javascript">';
						echo 'alert("invalid date entry or entry not present ")';
						echo '</script>';
					}
					else{
					while($row=mysql_fetch_assoc($result)){
						$str="YES";
						if(! $row[$date]){
							$str="NO";
						}
						echo "<tr>";
						echo "<td style=\" text-align: center;\">" .$row['student_id']. "</td>";
						echo "<td style=\"text-align: center;\"> " .$str. "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
			}
				// mysql_close($con);
			?>
		</div>
	
	</div>
</body>
</html>