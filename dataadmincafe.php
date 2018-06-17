<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	session_start();
	echo 	 "<h1 style=font-size=60px;>Data Admin</h1>"."<br>";
	$result = mysqli_query($con, "SELECT * FROM admincafe");
	while ($row = mysqli_fetch_array($result))
	{
		if ($row['id'] != $_SESSION['idnow']){
			echo "Nama: ".$row["nama"]."<br>";
			echo "Tanggal Lahir: ".$row["tgllahir"]."<br>";
			echo "Jenis Kelamin: ".$row["jk"]."<br>";
			echo "Alamat: ".$row["alamat"]."<br>"."<br>";
			echo '<a href="editadmincafe.php? id='.$row[0].'&name='.$row[1].'&tgllahir='.$row[2].'&jk='.$row[3].'&alamat='.$row[4].'&username='.$row[5].'"><button class= btn-warning> Edit </button></a>'."<br>";
			echo '<a href="deleteadmincafe.php? id='.$row[0].'""><button class= btn-danger>Hapus</button></a>';

			echo "<br />";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<form id="form" action="admincafe.php" method="post">
		<input type="submit" class="btn-success" name="back" value="Kembali">
	</form>
</body>
</html>