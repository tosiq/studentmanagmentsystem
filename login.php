<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootsrap.min.js"></script>
</head>
<body>
	<center><br>
		<h3>Student Managment System</h3><br>
		<form action="" method="post">
			<input type="submit" name="admin_login" value="Admin Login">
			<input type="submit" name="student_login" value="Student Login">
			
		</form>
		<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		
		}
		?>

	</center>

</body>
</html>