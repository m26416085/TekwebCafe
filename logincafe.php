<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	if (isset($_POST['login']))
	{
		$cek = 0;
		$result = mysqli_query($con, "SELECT * FROM admincafe");
		$username = $_POST['username'];
		$password = $_POST['password'];
		while ($row = mysqli_fetch_array($result))
		{
			if ($row['username'] == $username && $row['password'] == $password)
			{
				$cek = 1;
				session_start();
				$_SESSION["usernow"] = $row['nama'];
				header("location: admincafe.php");
			}
		}
		if ($cek == 0){
			echo "
				<script type=\"text/javascript\">
		         	alert('Username or Password is incorrect!');
		       	</script>
		        ";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="homecafe.php">Home</a>
	<a href="menucafe.php">Menu</a>
	<a href="eventcafe.php">Event</a>
	<a href="aboutuscafe.php">About Us</a>
	<a href="contactus.php">Contact Us</a>
	<a href="logincafe.php">Login</a><br>
	Login Cafe Here
	<form action = logincafe.php method = "post">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="login" value ="Login">
	</form>
</body>
</html>