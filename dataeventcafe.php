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
		echo '<a href="? idevent='.$row[0].'&namaevent='.$row[1].'&deskripsi='.$row[2].'&tanggal='.$row[3].'&kodepromo='.$row[4].'&gambar='.$row[5].'"><button> Edit </button></a>';
		echo '<a href="? idevent='.$row[0].'""><button>Hapus</button></a>';
		echo "<br />";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="neweventadmincafe.php" method="post">
		<input type="submit" name="" value="Event Baru">
	</form>
	<form action="admincafe.php" method="post">
		<input type="submit" name="cancel" value="Back">
	</form>
</body>
</html>