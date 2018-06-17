<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	session_start();
	$result = mysqli_query($con, "SELECT * FROM drink");
	while ($row = mysqli_fetch_array($result))
	{
			echo "ID: ".$row["id_minuman"]."<br>";

			echo "Nama: ".$row["nama_minuman"]."<br>";
			echo "Harga: ".$row["harga_minuman"]."<br>";
			echo "Jumlah: ".$row["jumlah_pemesanan_minuman"]."<br>";
			echo "Description: ".$row["deskripsi_minuman"]."<br>";
			echo "Image: ".$row["image_minuman"]."<br>";

			echo '<a href="editdrinkmenucafe.php? id_minuman='.$row[0].'&nama_minuman='.$row[1].'&harga_minuman='.$row[2].'&jumlah_pemesanan_minuman='.$row[3].'&deskripsi_minuman='.$row[4].'&image_minuman='.$row[5].'"><button> Edit </button></a>';
			echo '<a href="deletedrink.php? id='.$row[0].'""><button>Hapus</button></a>';

			echo "<br />";
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = "adddrinkmenucafe.php" method = "post">
		<input type="submit" name="adddrink" value="Add Drink">
	</form>

	<form action="admincafe.php" method="post">
		<input type="submit" name="back" value="Kembali">
	</form>
</body>
</html>