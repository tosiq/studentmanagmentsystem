<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootsrap.min.js"></script>
</head>
<body>
	<center><br>
		<h3>Student Login Page</h3><br>
		<form action="" method="post">
			Email: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit">
			<form><br>
				<?php
				if(isset($_POST['submit'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"sms");
					$query = "select * from students where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] ==$_POST['password']){
								header("Location: student_dashboard.php");
							}
							else{
								echo "Wrong Password";
							}
						}
						else{
							echo "wrong email_id";
						}
					}
				}
				?>

			</form>
	</center>

</body>
</html>