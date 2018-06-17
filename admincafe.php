<?php
	session_start();
	if(empty($_SESSION['idnow'])){
    header("location: homecafe.php");
	}
	if (isset($_POST['logout']))
	{
		session_destroy();
		header("location: homecafe.php");
	}
	echo "<h1 style=font-size=60px;>Current Admin: ".$_SESSION['usernow']."</h1>"."<br>"."<br>";
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM admincafe");
	while ($row = mysqli_fetch_array($result))
	{
		if ($row['nama'] == $_SESSION['usernow'])
		{
			echo "Nama: ".$row["nama"]."	".'<a href="editadmincafe.php? id='.$row[0].'&name='.$row[1].'&tgllahir='.$row[2].'&jk='.$row[3].'&alamat='.$row[4].'&username='.$row[5].'"><button class= btn-warning> Edit </button></a>'."<br>";
			echo "Tanggal Lahir: ".$row["tgllahir"]."<br>";
			echo "Jenis Kelamin: ".$row["jk"]."<br>";
			echo "Alamat: ".$row["alamat"]."<br>";
			/*echo '<a href="editdata.php? id='.$row[0].'&name='.$row[1].'&gender='.$row[3].'&alamat='.$row[2].'&umur='.$row[4].'"><button> Edit </button></a>';*/
			//echo '<a href="deleteadmincafe.php? id='.$row[0].'""><button>Hapus</button></a>';
			echo "<br />";
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
	<style type="text/css">
    body
    	{
    		margin-top: 10%;
    		width: 50%;
    		margin-left: 25%;
    	}
    </style>
</head>
<body>
	<form action="newadmincafe.php" method="post">
		<input type="submit" class="btn-success" name="new" value="New Admin">
	</form>

	<form action="dataadmincafe.php" method="post">
		<input type="submit" class="btn-success" name="data" value="Data Admin">
	</form>

	<form action = "datamenuminuman.php" method = "post">
		<input type="submit" class="btn-success" name="datadrink" value="Data Menu Minuman">
	</form>

	<form action = "datamenumakanan.php" method = "post">
		<input type="submit" class="btn-success" name="datafood" value="Data Menu Makanan">
	</form>

	<form action="neweventadmincafe.php" method="post">
		<input type="submit" class="btn-success" name="event" value="Event Baru">
	</form>

	<form action="admincafe.php" method="POST">
		<input type="submit" class="btn-danger" name="logout" value="Logout">
	</form>
</body>
	
</html>