
<!-- Connecting the database -->

<?php
include 'db_check.php';
?>



<?php

session_start();
// if(isset($_SESSION['log']))


// {
//   if($_SESSION['log']==2){

//   echo "<div class='alert container alert-info alert-dismissible' role='alert'> you have to log In first .. </div>";
// }
// }

if (isset($_POST['user_name']) && isset($_POST['password']) ) 
{ 
	// echo "<br><b>working on code</b>";
  # code...
	
  $user=$_POST['user_name'];
  $pass=$_POST['password'];
  // $user='';
  // echo $user;
//see the difference  in `` and '' as table entry details should have `` and user defined details under ''

  $sql= "SELECT * FROM `attendence`.`faculty_login` WHERE `userName`='$user' AND `password`='$pass' ; ";


  // $sql1 = "SELECT * FROM `spark`.`login_details` ; ";

  // echo "<br><span class='bg-primary'>".$sql."<br></span>";
  $result=mysql_query($sql);

  while ($field=mysql_fetch_assoc($result))
//  {

  print "<table class='table-responsive '><tr><td class='btn btn-success'>".$field['userName']."</td><td class='btn btn-primary'>".$field['password']."</td></tr></table>";
//   # code...
// $user=$field['userName'];
// }


$num=mysql_num_rows($result);

  if ($num>0)
   {echo "<div class='alert container alert-success alert-dismissible' role='alert'> Successfully Logged In .. </div>";

		    # code...
		 session_start();
		 $_SESSION['user']=$user;
		 // echo "<script> alert(\'SEssion Created\') </script>";
		 header("Location: dashboard.php");
		 echo"<br> <button class='btn btn-info'><a href='homepage.php'>take me to my homepage</a></button> ";
		 //header("Location:homepage.php");
  }
  // else echo "<div class='alert alert-danger alert-dismissible' role='alert'> Incorrect login details </div>";
else echo "<script> alert('Incorrect Credentials');</script>";

}

/*if($alert==1)
{
  echo "<div class='alert alert-danger dismissible' role='alert'> Incorrect login details </div>";
}*/
?> 


<!DOCTYPE html>
<html>

<!-- Head part -->
<head>
<meta charset="utf-8">
<meta name="author" content="pankaj-pundir">

	<title>attendence </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="inc/bootstrap/css/bootstrap.min.css">

<script src="inc/jquery.js">


</script>
</head>

<!-- Body part -->


<body>

<style type="text/css">
.active{
	color: rgba(10,200,10,1);
	text-shadow: 3px 3px 2px grey;
	font-size: 200%;
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


<div class ="jumbotron" style="height: 10%; padding: 5%; margin-left:10%; margin-right: 10%; background-color:rgba(100,100,200,0.4); font-family:algerian; font-weight: bold ;font-size:150%;">
	<center>Attendance</center>
	
</div>



<div id="my2" class="jumbotron" style=" background-color:#b9c9e5;  padding:5%;margin-left:10%; margin-right: 10%;  box-shadow: 2px 3px 10px grey; ">


<form method="POST" action="signup.php">
<div id="login1" class=" form-group" >
<center>
	<span class="heading">USERNAME</span> <input style="width: 50%;" class=" form-control" required="True" type="text" name="user_name"><br>
	<span class="heading">Password</span><input style="width: 50%;" class=" form-control" type="password" name="password" required="True"><br> <br>
	<button class="btn btn-success" type="submit" >CHECK IN</button>
	<button class="btn btn-warning"><a href="view.php">View attenddence</a></button>
</center>
</div>
</form>


</div>
</body>



</html>

