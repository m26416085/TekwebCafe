<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	session_start();
	$result = mysqli_query($con, "SELECT * FROM food");
	while ($row = mysqli_fetch_array($result))
	{
		
			echo "Nama: ".$row["nama_makanan"]."<br>";
			echo "Harga: ".$row["harga_makanan"]."<br>";
			echo "Jumlah: ".$row["jumlah_pemesanan_makanan"]."<br>";
			echo "Description: ".$row["deskripsi_makanan"]."<br>";
			echo "Image: ".$row["image_makanan"]."<br>";

			echo '<a href="editfoodmenucafe.php? id='.$row[0].'&nama_makanan='.$row[1].'&harga_makanan='.$row[2].'&jumlah_pemesanan_makanan='.$row[3].'&deskripsi_makanan='.$row[4].'&image_makanan='.$row[5].'"><button> Edit </button></a>';
			echo '<a href="deletefood.php? id='.$row[0].'""><button>Hapus</button></a>';

			echo "<br />";
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = "addfoodmenucafe.php" method = "post">
		<input type="submit" name="addfood" value="Add Food">
	</form>

	<form action="admincafe.php" method="post">
		<input type="submit" name="back" value="Kembali">
	</form>
</body>
</html>