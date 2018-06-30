<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM eventcafe");
	while ($row = mysqli_fetch_array($result))
	{
		echo "Nama Event: ".$row["namaevent"]."<br>";
		echo "Deskripsi Event: ".$row["deskripsievent"]."<br>";
		echo "Tanggal Event: ".$row["tanggalevent"]."<br>";
		echo "Kode Promo: ".$row["kodepromoevent"]."<br>";
		echo "<img src='uploads/".$row['gambarevent']."'  height='150px' width='300px'/>"."<br>";
		
		echo "<br />";
	}


	$result = mysqli_query($con, "SELECT * FROM food");
	while ($row = mysqli_fetch_array($result))
	{
			echo "Nama Makanan: ".$row["nama_makanan"]."<br>";
			echo "Harga: ".$row["harga_makanan"]."<br>";
			//deskripsi gabisa keluar
			echo "Deskripsi: ".$row["deskripsi_makanan"]."<br>";
            
			//image gabisa keluar
			echo "<img src='uploads/".$row['image_makanan']."'  height='150px' width='300px'/>"."<br>";
			
			echo "<br />";
			echo "<br />";
		
	}

	$result = mysqli_query($con, "SELECT * FROM drink");
	while ($row = mysqli_fetch_array($result))
	{
			echo "Nama Minuman: ".$row["nama_minuman"]."<br>";
			echo "Harga: ".$row["harga_minuman"]."<br>";

			//deskripsi gabisa keluar
			echo "Deskripsi: ".$row["deskripsi_minuman"]."<br>";

			//image gabisa keluar
			echo "<img src='uploads/".$row['image_minuman']."'  height='150px' width='300px'/>"."<br>";

			echo "<br /> <br>";
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>