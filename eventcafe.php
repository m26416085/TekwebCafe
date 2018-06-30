<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM eventcafe");
	while ($row = mysqli_fetch_array($result))
	{
		echo "Nama Event: ".$row["namaevent"]."<br>";
		echo "Deskripsi Event: ".$row["deskripsievent"]."<br>";
		echo "Tanggal Event: ".$row["tanggalevent"]."<br>";
		echo "Kode Promo: ".$row["kodepromoevent"]."<br>";
		echo "Gambar: <br>";
		echo "<img src='uploads/".$row['gambarevent']."'  height='150px' width='300px'/>"."<br>";
		
		echo "<br />";
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