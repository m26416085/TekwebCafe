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
			header("location: datamembercafe.php");
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
              <a class="nav-link" href="datamembercafe.php">Back</a>
            </li>
            <li class="nav-item">
              <form action="datamembercafe .php" method="POST">
            <input type="submit" class="btn" name="logout" value="Logout">
          </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<form id="form" class="form-horizontal" action="editmembercafe.php" method="post">
          <fieldset>
            <div id="legend" >
              <legend class="" style="font-size: 60px; text-align: center;">Edit Data Member</legend>
            </div>

            <div class="control-group">
              <label class="control-label" for="id">ID</label>
              <div class="controls">
                <input type="text" name="id" placeholder="" class="form-control input-lg" value="<?php echo $_GET['id']; ?>" readOnly>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="nama">Nama</label>
              <div class="controls">
                <input type="text" name="nama" placeholder="" class="form-control input-lg"  value="<?php echo $_GET['name']; ?>" required="">
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="date">Tanggal Lahir</label>
              <div class="controls">
                <input type="date" name="date" placeholder=""  min="1950-01-01" max="2000-01-01" class="form-control input-lg"  value="<?php echo date('Y-m-d',strtotime($_GET['tgllahir'])); ?>" required="">
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
                <input type="text" name="alamat" placeholder="" class="form-control input-lg" value="<?php echo $_GET['alamat']; ?>">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="usename">Username</label>
              <div class="controls">
                <input type="text" name="username" placeholder="" class="form-control input-lg" required=""  value="<?php echo $_GET['username']?>">
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
                <input type="submit" name="save" class="btn btn-success btn-block" value="Save">
              </div>
            </div>
          </fieldset>
        </form>
        <form action="datamembercafe.php" action="post">
        <button class="btn btn-warning" style="color: white;">Cancel</button>
        </form>
</body>
</html>