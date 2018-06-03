<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
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
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	New Admin Cafe here!!
	<form action = newadmincafe.php method = "post">
		Nama: <input type="text" name="nama"><br>
		Tanggal Lahir: <input type="date" name="date" min="1950-01-01" max="2000-01-01"><br>
		Jenis Kelamin: <input type="radio" name="jk" value="L"> Pria <input type="radio" name="jk" value="W"> Wanita<br>
		Alamat: <input type="text" name="alamat"><br>
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="signup" value="Daftar"><br>
	</form>
</body>
</html>