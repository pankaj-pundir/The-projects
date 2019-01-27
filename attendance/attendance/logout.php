

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="inc/bootstrap/css/bootstrap.min.css">


<script src="inc/jquery.js">
</script>
<?php session_start(); session_destroy(); ?>
</head>
<body>

<div class="jumbotron" style="margin: 5%; background-color: rgba(100,200,200,0.4);"><center><h1>You are successfully logged Out</h1>
<h3><a href="student_login.php">student login</a> <br><a href="signup.php">Sign up</a><br><a href="view.php"><u>view attendance</u></a></h3></center></div>
<center>
<form method="POST" action="signup.php">
	

</form>
</center>

</body>
</html>