<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	session_start();
	if(empty($_SESSION['idnow'])){
    header("location: homecafe.php");
	}
	if (isset($_POST['signup']))
	{
		$nama = $_POST['nama'];
		$lahir = $_POST['date'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		mysqli_query($con, "INSERT INTO admincafe VALUES (null, '$nama', '$lahir', '$jk', '$alamat', '$username', '$password')");
		header("location: admincafe.php");
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
	New Admin Cafe here!!
	<form action = newadmincafe.php method = "post">
		Nama: <input type="text" name="nama" required><br>
		Tanggal Lahir: <input type="date" name="date" min="1950-01-01" max="2000-01-01" required><br>
		Jenis Kelamin: <input type="radio" name="jk" value="L"> Pria <input type="radio" name="jk" value="W"> Wanita<br>
		Alamat: <input type="text" name="alamat" required><br>
		Username: <input type="text" name="username" required><br>
		Password: <input type="password" name="password" required><br>
		<input type="submit" name="signup" value="Daftar">
		<input type="submit" name="cancel" value="Batal"><br>
	</form>
</body>
</html>