<?php
	$con= mysqli_connect("localhost", "root", "", "dbcafe");
	session_start();
	if(empty($_SESSION['idnow'])){
    header("location: homecafe.php");
	}
		if(isset($_POST['save']))
		{
		
			$result= mysqli_query($con,"SELECT * FROM membercafe");
			while($row = mysqli_fetch_array($result))
			{
			$id=$_POST['id'];
			$nama=$_POST['nama'];
			$lahir=$_POST['date'];
			$jk=$_POST['jk'];
			$alamat=$_POST['alamat'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			mysqli_query($con,"UPDATE membercafe SET nama='$nama',tgllahir='$lahir', jk='$jk', alamat='$alamat', username='$username', password='$password' WHERE id = '$id'");
			header("location: eventcafe.php");
			}
		}
	else if (isset($_POST['cancel']))
	{
		header("location: datamembercafe.php");
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="editmembercafe.php" method="post">
		ID Member: <input type="text" name="id" value="<?php echo $_GET['id']; ?>" readOnly><br>
		Nama: <input type="text" name="nama" value="<?php echo $_GET['name']; ?>"><br>
		Tanggal Lahir: <input type="date" name="date" min="1950-01-01" max="2000-01-01" value="<?php echo date('Y-m-d',strtotime($_GET['tgllahir'])); ?>"><br>
		Jenis Kelamin: <input type="radio" name="jk" value="L"> Pria <input type="radio" name="jk" value="W"> Wanita<br>
		Alamat: <input type="text" name="alamat" value="<?php echo $_GET['alamat']; ?>"><br>
		Username: <input type="text" name="username" value="<?php echo $_GET['username']?>"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="save" value="Simpan">
		<button><a href="admincafe.php" style="text-decoration: none;">Cancel</a></button>
	</form>
</body>
</html>