<?php
	session_start();
	if(empty($_SESSION['idnow'])){
    header("location: homecafe.php");
	}
	if (isset($_POST['logout']))
	{
		session_destroy();
		header("location: homecafe.php");
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
			echo '<a href="editadmincafe.php? id='.$row[0].'&name='.$row[1].'&tgllahir='.$row[2].'&jk='.$row[3].'&alamat='.$row[4].'&username='.$row[5].'"><button> Edit </button></a>';
			//echo '<a href="deleteadmincafe.php? id='.$row[0].'""><button>Hapus</button></a>';
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
	<form action="dataadmincafe.php" method="post">
		<input type="submit" name="data" value="Data Admin">
	</form>
	<form action = "datamenuminuman.php" method = "post">
		<input type="submit" name="datadrink" value="Data Menu Minuman">
	</form>

	<form action = "datamenumakanan.php" method = "post">
		<input type="submit" name="datafood" value="Data Menu Makanan">
	</form>

	<form action="dataeventcafe.php" method="post">
		<input type="submit" name="event" value="Data Event">
	</form>
</body>
	
</html>