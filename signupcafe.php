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
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script type="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    	#regis
    	{
    		width: 50%;
    		margin-left: 25%;
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
</body>
</html>