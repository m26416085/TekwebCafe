<?php
	session_start();
	if (isset($_POST['logout']))
	{
		session_destroy();
		header("location: logincafe.php");
	}
	echo "Current Admin: ".$_SESSION['usernow']."<br>";
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM admincafe");
	while ($row = mysqli_fetch_array($result))
	{
		if ($row['nama'] == $_SESSION['usernow'])
		{
			echo "Nama: ".$row["nama"]."<br>";
			echo "Tanggal Lahir: ".$row["tgllahir"]."<br>";
			echo "Jenis Kelamin: ".$row["jk"]."<br>";
			echo "Alamat: ".$row["alamat"]."<br>";
			/*echo '<a href="editdata.php? id='.$row[0].'&name='.$row[1].'&gender='.$row[3].'&alamat='.$row[2].'&umur='.$row[4].'"><button> Edit </button></a>';*/
			echo "<br />";
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="admincafe.php" method="POST">
		<input type="submit" name="logout" value="Logout"><br>
	</form>
	<form action="newadmincafe.php" method="post">
		<input type="submit" name="new" value="New Admin"><br>
	</form>
</body>
</html>