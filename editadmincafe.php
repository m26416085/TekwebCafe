<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	if (isset($_POST['save']))
	{
		$result = mysqli_query($con, "SELECT * FROM admincafe");
		while ($row = mysqli_fetch_array($result)){
			$id = $_POST['id'];
			$nama = $_POST['nama'];
			$lahir = $_POST['date'];
			$jk = $_POST['jk'];
			$alamat = $_POST['alamat'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			mysqli_query($con, "UPDATE admincafe SET nama='$nama', tgllahir='$lahir', jk='$jk', alamat='$alamat', username='$username', password='$password' WHERE id = '$id'");
			header("location: dataadmincafe.php");
		}
	}
	else if (isset($_POST['cancel']))
	{
		header("location: dataadmincafe.php");
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="editadmincafe.php" method="post">
		ID Admin: <input type="text" name="id" value="<?php echo $_GET['id']; ?>" readOnly><br>
		Nama: <input type="text" name="nama" value="<?php echo $_GET['name']; ?>"><br>
		Tanggal Lahir: <input type="date" name="date" min="1950-01-01" max="2000-01-01" value="<?php echo date('Y-m-d',strtotime($_GET['tgllahir'])); ?>"><br>
		Jenis Kelamin: <input type="radio" name="jk" value="L"> Pria <input type="radio" name="jk" value="W"> Wanita<br>
		Alamat: <input type="text" name="alamat" value="<?php echo $_GET['alamat']; ?>"><br>
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="save" value="Simpan">
		<input type="submit" name="cancel" value="Batal"><br>
	</form>
</body>
</html>