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

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <style>
    body
    	{
        	background-color:#f05f40;
        	font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
        	color: white;
    	}
    .item img
    {
    	width: 100%;
    	height: 100%;
    	margin: auto;
    }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="homecafe.php">Seljeff</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <form action="datamembercafe.php" method="POST">
				<input type="submit" class="btn" name="back" value="Back">
			</form>
            </li>
            <li class="nav-item">
            	<form action="datamembercafe.php" method="POST">
				<input type="submit" class="btn" name="logout" value="Logout">
				</form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</head>
<body>
 
      <div class="container my-auto text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase" style="background-color: #282a2d;">
              <strong>Events</strong>
            </h1>
          </div>
        </div>
      </div>
 
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM eventcafe");
    $counter = 1;
    while($row = mysqli_fetch_array($result)){
?>
            <div class="item <?php if($counter <= 1){echo "active";} ?>">
                <img style="width: 900px; height: 650px; position: center;"src="uploads/<?php echo $row['gambarevent'] ?>">
                <div class="carousel-caption d-none d-md-block">
                	<h1><?php echo $row['namaevent'];?></h1>
                    <h2><?php echo $row['tanggalevent']; ?></h2>
                    <p><?php echo $row['deskripsievent']; ?></p>
                    <p><?php echo $row['kodepromoevent']; ?></p>
                </div>
            </div>
<?php
    $counter++;}
?>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

		<div class="container my-auto text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase" style="background-color: #282a2d;">
              <strong>Foods</strong>
            </h1>
          </div>
        </div>
      </div>

<div id="#myFood" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result1 = mysqli_query($con, "SELECT * FROM food");
    $counter1 = 1;
    while($row = mysqli_fetch_array($result1)){
?>
            <div class="item <?php if($counter1 <= 1){echo "active";} ?>">
                <img style="width: 900px; height: 650px; position: center; "src="uploads/<?php echo $row['image_makanan'] ?>">
                 <div class="carousel-caption d-none d-md-block">
                	<h1><?php echo $row['nama_makanan'];?></h1>
                    <h2><?php echo $row['harga_makanan']; ?></h2>
                    <p><?php echo $row['deskripsi_makanan']; ?></p>
                    <p><?php echo $row['tipe_makanan']; ?></p>
                </div>
            </div>
<?php
    $counter1++;}
?>
    </div>
    <a class="left carousel-control" href="##myFood" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myFood" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

		<div class="container my-auto text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase" style="background-color: #282a2d;">
              <strong>Drinks</strong>
            </h1>
          </div>
        </div>
      </div>

<div id="myDrink" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result2 = mysqli_query($con, "SELECT * FROM drink");
    $counter2 = 1;
    while($row = mysqli_fetch_array($result2)){
?>
            <div class="item <?php if($counter2 <= 1){echo "active";} ?>">
                <img style="width: 900px; height: 650px; position: center; "src="uploads/<?php echo $row['image_minuman'] ?>">
                 <div class="carousel-caption d-none d-md-block">
                	<h1><?php echo $row['nama_minuman'];?></h1>
                    <h2><?php echo $row['harga_minuman']; ?></h2>
                    <p><?php echo $row['deskripsi_minuman']; ?></p>
                </div>
            </div>
<?php
    $counter2++;}
?>
    </div>
    <a class="left carousel-control" href="#myDrink" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myDrink" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</body>
</html>