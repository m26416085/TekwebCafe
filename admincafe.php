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
	echo "<h1 class=navbar-brand; style=font-size=60px;>Current Admin: ".$_SESSION['usernow']."</h1>"."<br>"."<br>";
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM admincafe");
	while ($row = mysqli_fetch_array($result))
	{
		if ($row['nama'] == $_SESSION['usernow'])
		{
			echo "Nama: ".$row["nama"]."	".'<a href="editadmincafe.php? id='.$row[0].'&name='.$row[1].'&tgllahir='.$row[2].'&jk='.$row[3].'&alamat='.$row[4].'&username='.$row[5].'"><button class= btn> Edit </button></a>'."<br>";
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
    		margin-top:10%;
    		background-color:#f05f40; 
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
              <a class="nav-link" href="newadmincafe.php">New Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="dataadmincafe.php">Data Admin</a>
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
    <section class="bg-light text-dark">
     <div class="container">
        <div class="row">
          <div class="col-lg-6 col-lg-6 text-center">
          	<div class="service-box mt-5 mx-auto">
            <form action = "datamenumakanan.php" method = "POST">
			<input type="submit"style="display: none" class="btn btn-primary btn-xl js-scroll-trigger" name="datafood" value="Data Menu Makanan">
			</form>
			</div>
			<div class="service-box mt-5 mx-auto">
            <form action = "datamenumakanan.php" method = "POST">
			<input type="submit" class="btn btn-primary btn-xl js-scroll-trigger" name="datafood" value="Data Menu Makanan">
			</form>
			</div>
            <div class="service-box mt-5 mx-auto">
            <form action = "datamenuminuman.php" method = "post">
			<input type="submit" class="btn btn-primary btn-xl js-scroll-trigger" name="datadrink" value="Data Menu Minuman">
			</form>
            </div>
          </div>
          <div class="col-lg-6 col-lg-6 text-center">
            <div class="service-box mt-5 mx-auto">
            <form action="neweventadmincafe.php" method="post">
			<input type="submit" class="btn btn-primary btn-xl" name="event" value="Event Baru">
			</form>
            </div>
            <div class="service-box mt-5 mx-auto">
            <form action="dataeventcafe.php" method="post">
			<input type="submit" class="btn btn-primary btn-xl" name="event" value="Data Event">
			</form>
			</div>
          </div>
        </div>
      </div>
    </section>
</body>
	
</html>