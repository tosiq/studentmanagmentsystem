<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootsrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;	
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;

		}
	</style>

	<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
					

	?>

</head>
<body>
<div id = "header">
	<center><br><strong>Student Managment System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
		Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 Name: <?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 Logout</a>
	</center>
</div>
<span id="top_span"><marquee>Note: This portal is open till 10 of december kindly update information otherwise pannal will be close</marquee></span>
<div id = "left_side"><br><br><br>
	<form action ="" method="post">
		<table>
			<tr>
				<td>
					<input type="submit" name="search_student" value="Search Student">

				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="edit_student" value="Edit Student">
					
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="add_new_student" value="Add New Student">
					
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="delete_student" value="Delete Student">
					
				</td>
			</tr>
		</table>
	</form>
</div>
<div id="right_side"><br>
	<div id ="demo">
		<?php
		if(isset($_POST['search_student'])){
			?>
			<center>
				<form action="" method="post">
Enter Roll No:
				<input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_search" value="Search">
				</form>
			</center>
			<?php
		}
		if(isset($_POST['search_by_roll_no_for_search']))
		{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?> 
						<table>
							<tr>
								<td><b>
									Roll No:
								</b>
									
								</td>
								<td>
								<input type="text" value="<?php echo $row['roll_no'];?>"disabled>

								</td>
							</tr>
							<tr>
								<td><b>
									Name:
								</b>
									
								</td>
								<td>
								<input type="text" value="<?php echo $row['name'];?>"disabled>

								</td>
							</tr>
							<tr>
								<td><b>
									Father Name:
								</b>
									
								</td>
								<td>
								<input type="text" value="<?php echo $row['father_name'];?>"disabled>

								</td>
							</tr>
							<tr>
								<td><b>
									Class:
								</b>
									
								</td>
								<td>
								<input type="text" value="<?php echo $row['class'];?>"disabled>

								</td>
							</tr>
							<tr>
								<td><b>
									Mobile Number:
								</b>
									
								</td>
								<td>
								<input type="text" value="<?php echo $row['mobile_number'];?>"disabled>

								</td>
							</tr>
							<tr>
								<td><b>
									Email:
								</b>
									
								</td>
								<td>
								<input type="text" value="<?php echo $row['email'];?>"disabled>

								</td>
							</tr>
							<tr>
								<td><b>
									Password:
								</b>
									
								</td>
								<td>
								<input type="text" value="<?php echo $row['password'];?>"disabled>

								</td>
							</tr>
							<tr>
								<td><b>
									Remark:
								</b>
									
								</td>
								<td>
								<textarea rows="3" cols="40" disabled><?php echo $row['remark'];?></textarea>

								</td>
							</tr>
						</table>
						<?php

					}
		}
		?>
		<?php
		if(isset($_POST['edit_student'])){
			?>
			<center>
				<form action="" method="post">
Enter Roll No:
				<input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form>
			</center>
			<?php
		}
		if(isset($_POST['search_by_roll_no_for_edit']))
		{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?> 
						<form action="admin_edit_student.php" method="post">
						<table>
							<tr>
								<td><b>
									Roll No:
								</b>
									
								</td>
								<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>">

								</td>
							</tr> 
							<tr>
								<td><b>
									Name:
								</b>
									
								</td>
								<td>
								<input type="text" name="name" value="<?php echo $row['name'];?>">

								</td>
							</tr>
							<tr>
								<td><b>
									Father Name:
								</b>
									
								</td>
								<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name'];?>">

								</td>
							</tr>
							<tr>
								<td><b>
									Class:
								</b>
									
								</td>
								<td>
								<input type="text" name="class" value="<?php echo $row['class'];?>">

								</td>
							</tr>
							<tr>
								<td><b>
									Mobile Number:
								</b>
									
								</td>
								<td>
								<input type="text" name="mobile_number" value="<?php echo $row['mobile_number'];?>">

								</td>
							</tr>
							<tr>
								<td><b>
									Email:
								</b>
									
								</td>
								<td>
								<input type="text" name="email" value="<?php echo $row['email'];?>">

								</td>
							</tr>
							<tr>
								<td><b>
									Password:
								</b>
									
								</td>
								<td>
								<input type="text" name="password" value="<?php echo $row['password'];?>">

								</td>
							</tr>
							<tr>
								<td><b>
									Remark:
								</b>
									
								</td>
								<td>
								<textarea rows="3" cols="40" name="remark" ><?php echo $row['remark'];?></textarea>

								</td>
							</tr><br>
							<tr>
								<td>
									<td><input type="submit" name="edit" value="Save"></td>
								</td>
							</tr>

						</table>
					</form>
						<?php

					}
		}
		?>
		<?php



		if(isset($_POST['add_new_student'])){
			?>
			<center>
				<h4>Fill The Given Detail"</h4>
			</center>
			<form action="add_student.php" method="post">
				<table>
					<tr>
						<td>Roll No:</td>
						<td>
							<input type="text" name="roll_no" required>
						</td>
					</tr>
						<tr>
						<td>Name:</td>
						<td>
							<input type="text" name="name" required>
						</td>
					</tr>
						<tr>
						<td>Father Name:</td>
						<td>
							<input type="text" name="father_name" required>
						</td>
					</tr>
						<tr>
						<td>class:</td>
						<td>
							<input type="text" name="class" required>
						</td>
					</tr>
						<tr>
						<td>Mobile Number:</td>
						<td>
							<input type="text" name="mobile_number" required>
						</td>
					</tr>
						<tr>
						<td>Email:</td>
						<td>
							<input type="text" name="email" required>
						</td>
					</tr>
						<tr>
						<td>Password:</td>
						<td>
							<input type="text" name="password" required>
						</td>
					</tr>
						<tr>
						<td>Remarl:</td>
						<td>
							<textarea rows="3" cols="40" name="remark"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="add" value="Add Student">
						</td>
					</tr>
				</table>
			</form>
			<?php
		}
		?>
		<?php

		if(isset($_POST['delete_student'])){
			?>
			<center>
				<h5>Enter Roll For Delete Student</h5><br>
				<form action="delete_student.php" method="post">
					Roll No:
					<input type="text" name="roll_no" >
					<input type="submit" name="search_by_roll_no_for_delete" value="Delete Student">
				</form>
			</center>
			<?php
		}
		?>

	</div>
	
</div>
</body>
</html>