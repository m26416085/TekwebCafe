<?php
	$con= mysqli_connect("localhost","root","","dbcafe");
	if(isset($_POST['signup']))
	{
		$nama=$_POST['nama'];
		$lahir=$_POST['date'];
		$jk=$_POST['jk'];
		$alamat=$_POST['alamat'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		mysqli_query($con, "INSERT INTO membercafe VALUES (null,'$nama','$lahir','$jk','$alamat','$username','$password')");
		header("location: eventcafe.php");
	}
  if(isset($_POST['cancel']))
  {
      header("location: homecafe.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
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
	<form id="regis" class="form-horizontal" action="signupcafe.php" method="post">
          <fieldset>
            <div id="legend" >
              <legend class="" style="font-size: 60px; text-align: center;">Register</legend>
            </div>
            <div class="control-group">
              <label class="control-label" for="nama">Nama</label>
              <div class="controls">
                <input type="text" name="nama" placeholder="" class="form-control input-lg" required="">
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="date">Tanggal Lahir</label>
              <div class="controls">
                <input type="date" name="date" placeholder=""  min="1950-01-01" max="2000-01-01" class="form-control input-lg" required="">
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="jk">Jenis Kelamin</label>
              <div class="controls">
                <input type="radio" name="jk" value="L">Pria
                <input type="radio" name="jk" value="W">Wanita
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="alamat">Alamat</label>
              <div class="controls">
                <input type="text" name="alamat" placeholder="" class="form-control input-lg">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="usename">Username</label>
              <div class="controls">
                <input type="text" name="username" placeholder="" class="form-control input-lg" required="">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" name="password" placeholder="" class="form-control input-lg" required="">
              </div>
            </div>

            <div class="control-group">
              <!-- Button -->
              <br>
              <div class="controls">
                <input type="submit" name="signup" class="btn btn-success btn-block" value="Signup">
              </div>
            </div>
          </fieldset>
        </form>
              <form action="homecafe.php" method="post">
                <input type="submit" name="cancel" style="color:white;" class="btn btn-warning btn-block" value="Cancel">
              </form>
</body>
</html>