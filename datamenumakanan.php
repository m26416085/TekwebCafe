<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM food");
    session_start();
    if(empty($_SESSION['idnow'])){
        header("location: homecafe.php");
    }
	while ($row = mysqli_fetch_array($result))
	{
			echo "Nama: ".$row["nama_makanan"]."<br>";
			echo "Harga: ".$row["harga_makanan"]."<br>";
			//deskripsi gabisa keluar
			echo "Description: ".$row["deskripsi_makanan"]."<br>";
            
			//image gabisa keluar
			echo "Gambar: <br>";
			echo "<img src='uploads/".$row['image_makanan']."'  height='150px' width='300px'/>"."<br>";
			
			echo '<a href="editfoodmenucafe.php? id='.$row[0].'&nama_makanan='.$row[1].'&harga_makanan='.$row[2].'&deskripsi_makanan='.$row[4].'&image_makanan='.$row[5].'">';

			echo "Image: ".$row["image_makanan"]."<br>";

			echo '<a href="editfoodmenucafe.php? id='.$row[0].'&nama_makanan='.$row[1].'&harga_makanan='.$row[2].'&deskripsi_makanan='.$row[4].'&image_makanan='.$row[5].'"><button class= btn btn-danger; style=color:#f05f40;> Edit </button></a>';
			echo '<a href="deletefood.php? id='.$row[0].'""><button class= btn btn-danger; style=color:#f05f40;>Hapus</button></a>';

			echo "<br />";
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
              <a class="nav-link" href="addfoodmenucafe.php">Add Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admincafe.php">Back</a>
            </li>
            <li class="nav-item">
            	<form action="admincafe.php" method="POST">
				<input type="submit" class="btn" name="logout" value="Logout">
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>