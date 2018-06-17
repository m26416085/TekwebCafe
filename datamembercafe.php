<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	session_start();
	if(empty($_SESSION['idnow'])){
    header("location: homecafe.php");
	}
	$result = mysqli_query($con, "SELECT * FROM membercafe");
	while ($row = mysqli_fetch_array($result))
	{
		if ($row['id'] == $_SESSION['idnow']){
			echo "Nama: ".$row["nama"]."<br>";
			echo "Tanggal Lahir: ".$row["tgllahir"]."<br>";
			echo "Jenis Kelamin: ".$row["jk"]."<br>";
			echo "Alamat: ".$row["alamat"]."<br>";
			echo '<a href="editmembercafe.php? id='.$row[0].'&name='.$row[1].'&tgllahir='.$row[2].'&jk='.$row[3].'&alamat='.$row[4].'&username='.$row[5].'"><button> Edit </button></a>';
			echo '<a href="deletemembercafe.php? id='.$row[0].'""><button>Hapus</button></a>';

			echo "<br />";
		}
	}
	if(isset($_POST['back']))
	{
		session_destroy();
		header("location: homecafe.php");	
	}
	if(isset($_POST['event']))
	{
		session_destroy();
		header("location: eventcafe.php");	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="datamembercafe.php" method="post">
		<input type="submit" name="event" value="Event">
		<input type="submit" name="back" value="Exit">
	</form>
</body>
</html>