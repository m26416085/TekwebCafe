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
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
	<style type="text/css">
	#form
    	{
    		margin-top: 5%;
    		width: 50%;
    		margin-left: 25%;
    	}
    </style>
</head>
<body>
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
                <input type="submit" name="signup" class="btn btn-success btn-block" value="Signup">
              </div>
            </div>

             <div class="control-group">
              <!-- Button -->
              <br>
              <div class="controls">
              <button class="btn btn-warning"><a href="datamembercafe.php" style="text-decoration: none;">Cancel</a></button>
              </div>
            </div>
          </fieldset>
        </form>
</body>
</html>