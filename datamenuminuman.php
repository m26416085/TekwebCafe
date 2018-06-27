<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	session_start();
	$result = mysqli_query($con, "SELECT * FROM drink");
	while ($row = mysqli_fetch_array($result))
	{
			echo "Nama: ".$row["nama_minuman"]."<br>";
			echo "Harga: ".$row["harga_minuman"]."<br>";
			echo "Jumlah: ".$row["jumlah_pemesanan_minuman"]."<br>";
			//deskripsi gabisa keluar
			echo "Description: ".$row["deskripsi_minuman"]."<br>";
			echo "Image: ".$row["image_minuman"]."<br>";

<<<<<<< HEAD
			//image gabisa keluar
			echo "<img src='uploads/".$row['image_minuman']."'  height='150px' width='300px'/>"."<br>";
			echo '<a href="editdrinkmenucafe.php? id_minuman='.$row[0].'&nama_minuman='.$row[1].'&harga_minuman='.$row[2].'&jumlah_pemesanan_minuman='.$row[3].'&deskripsi_minuman='.$row[4].'&image_minuman='.$row[5].'';

=======
>>>>>>> 2c353878390a03d7358b70b765d9d45223898e35
			echo '<a href="editdrinkmenucafe.php? id_minuman='.$row[0].'&nama_minuman='.$row[1].'&harga_minuman='.$row[2].'&jumlah_pemesanan_minuman='.$row[3].'&deskripsi_minuman='.$row[4].'&image_minuman='.$row[5].'"><button button class= btn btn-danger; style=color:#f05f40;> Edit </button></a>';
			echo '<a href="deletedrink.php? id='.$row[0].'""><button button class= btn btn-danger; style=color:#f05f40;>Hapus</button></a>';

			echo "<br />";
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seljeff</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
   
	<style type="text/css">
   	body
    	{
    		margin-left: 25%;
        	width: 50%;
        	margin-top:10%;
        	background-color:#f05f40;
        	font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
        	color: white;
    	}
    </style>
</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="homecafe.php">Seljeff</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="adddrinkmenucafe.php">Add Drink</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admincafe.php">Back</a>
            </li>
            <li class="nav-item">
            	<form action="admincafe.php" method="POST">
				<input type="submit" class="btn" name="logout" value="Logout">
				</form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>