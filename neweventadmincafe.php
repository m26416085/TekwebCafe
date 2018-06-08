<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM eventcafe");
	while ($row = mysqli_fetch_array($result))
	{
		echo "Nama Event: ".$row["namaevent"]."<br>";
		echo "Deskripsi Event: ".$row["deskripsievent"]."<br>";
		echo "Tanggal Event: ".$row["tanggalevent"]."<br>";
		echo "Kode Promo: ".$row["kodepromoevent"]."<br>";
		echo "Gambar: ".$row["gambarevent"]."<br>";
		echo '<a href="? idevent='.$row[0].'&namaevent='.$row[1].'&deskripsi='.$row[2].'&tanggal='.$row[3].'&kodepromo='.$row[4].'&gambar='.$row[5].'"><button> Edit </button></a>';
		echo '<a href="? idevent='.$row[0].'""><button>Hapus</button></a>';
		echo "<br />";
	}
	if (isset($_POST['tambah']))
	{

	}
	else if (isset($_POST['cancel']))
	{
		header("location: admincafe.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="neweventadmincafe.php" method="post">
		Nama Event: <input type="text" name="nama"> <input type="checkbox" name="butuh" onclick="cekpromo()" id="cb1">Centang jika menggunakan kode promo <br>
		Deskripsi Event: <br><textarea rows="15" cols="60" placeholder="Masukkan deskripsi..."></textarea> <br>
		Tanggal Event: <input type="date" name="tanggal""> <br>
		Upload Gambar: 
		<p id="kp" style="display: none">Kode Promo: <input type="text" name="kodepromo"></p><br>
		<script type="text/javascript">
			function cekpromo(){
				var test = document.getElementById("kp");
				if (document.getElementById("cb1").checked == true){
					test.style.display = "block";
				}
				else{
					test.style.display = "none";
				}
			}
		</script>
		<input type="submit" name="tambah" value="Tambah Event">
		<input type="submit" name="cancel" value="Batal">
	</form>
</body>
</html>