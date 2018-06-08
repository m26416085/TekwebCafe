<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM admincafe");
	while ($row = mysqli_fetch_array($result))
	{
		echo "Nama: ".$row["nama"]."<br>";
		echo "Tanggal Lahir: ".$row["tgllahir"]."<br>";
		echo "Jenis Kelamin: ".$row["jk"]."<br>";
		echo "Alamat: ".$row["alamat"]."<br>";
		echo '<a href="editadmincafe.php? id='.$row[0].'&name='.$row[1].'&tgllahir='.$row[2].'&jk='.$row[3].'&alamat='.$row[4].'"><button> Edit </button></a>';
		echo '<a href="deleteadmincafe.php? id='.$row[0].'""><button>Hapus</button></a>';

		echo "<br />";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="admincafe.php" method="post">
		<input type="submit" name="back" value="Kembali">
	</form>
</body>
</html>