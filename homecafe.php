<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
  $con = mysqli_connect("localhost", "root", "", "dbcafe");
  if (isset($_POST['login']))
  {
    $cek = 0;
    $cek1 = 0;
    $result = mysqli_query($con, "SELECT * FROM admincafe");
    $username = $_POST['username'];
    $password = $_POST['password'];
    while ($row = mysqli_fetch_array($result))
    {
      if ($row['username'] == $username && $row['password'] == $password)
      {
        $cek = 1;
        session_start();
        $_SESSION['idnow'] = $row['id'];
        $_SESSION["usernow"] = $row['nama'];
        header("location: admincafe.php");
      }
    }
    if ($cek == 0){
          $con1 = mysqli_connect("localhost", "root", "", "dbcafe");
          $cek1 = 0;
          $result1 = mysqli_query($con1, "SELECT * FROM membercafe");
          while ($row1 = mysqli_fetch_array($result1))
          {
            if ($row1['username'] == $username && $row1['password'] == $password)
            {
              $cek1 = 1;
              session_start();
              $_SESSION['idnow'] = $row1['id'];
              $_SESSION["usernow"] = $row1['nama'];
              header("location: datamembercafe.php");
            }
          }
          if($cek1==0 )
          {
            echo "<script type=\"text/javascript\">alert('Username or Password is incorrect!');</script>";
          }
    }
  }
?>

<style type="text/css">
	.carousel-inner{
		height: 700px;
	}
  #map{
    height: 64%;
  }
	.carousel-caption{
		padding-bottom: 300px;
	}
	.container-fluid{
		padding-top: 10px;
		height: 80px;
		font-size: 20px;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="navbar-header">
      <a class="navbar-brand" href="homecafe.php" style="margin-right: 500px;">SelJeff</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="homecafe.php">Home</a></li>
      <li><a href="#">Menu</a></li>
      <li><a href="#">Event</a></li>
     <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
     <ul id="login-dp" class="dropdown-menu">
     <li>
     <div class="row">
     <div class="col-md-12">
        <form action = homecafe.php method = "post">
				Username:<br> <input type="text" name="username"><br><br>
				Password:<br> <input type="password" name="password"><br><br>
				<input type="submit" class="btn btn-success btn-block" name="login" value ="Login"><br>
			</form>
     </div>
     <div class="bottom text-center">
     New here ? <a href="signupcafe.php"><b>Join Us</b></a>
     </div>
     </div>
     </li>
     </ul>
     </li>
     </ul>
     </ul>
 </nav>
</head>
<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >

      <div class="item active">
        <img src="1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Food1Name</h3>
          <p>food1desc</p>
        </div>
      </div>

      <div class="item">
        <img src="2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
           <h3>Food2Name</h3>
          <p>food2desc</p>
        </div>
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
            <h3>Food3Name</h3>
          <p>food3desc</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container">
  	<br><br>
  	 <div class="row">
            <div class="col-md-4">
            <img src="1.jpg" width="150" height="150" class="img-circle" style="margin-left: 70px;"><br><br>
			       A steak (/ˈsteɪk/) is a meat generally sliced across the muscle fibers, potentially including a bone. Exceptions, in which the meat is sliced parallel to the fibers, include the skirt steak that is cut from the plate, the flank steak that is cut from the abdominal muscles, and the Silverfinger steak that is cut from the loin and includes three rib bones. When the word "steak" is used without qualification, it generally refers to a beefsteak.

            </div>
            <div class="col-md-4">
            <img src="2.jpg" width="150" height="150" class="img-circle" style="margin-left: 70px;"><br><br>
            A fish steak, alternatively known as a fish cutlet, is a cut of fish which is cut perpendicular to the spine and can either include the bones or be boneless.[1] Fish steaks can be contrasted with fish fillets, which are cut parallel to either side of the spine and do not include the larger bones. In contrast to other vertebrate animals, over 85% of the fish body is made up of consumable muscle.

            </div>
            <div class="col-md-4">
            <img src="3.jpg" width="150" height="150" class="img-circle" style="margin-left: 70px;" ><br><br>
             A hamburger, beefburger or burger is a sandwich consisting of one or more cooked patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The patty may be pan fried, barbecued, or flame broiled. Hamburgers are often served with cheese, lettuce, tomato, bacon, onion, pickles, or chiles; condiments such as mustard, mayonnaise, ketchup, relish, or "special sauce"; and are frequently placed on sesame seed buns

            </div>                
        </div>
  </div>

 <div class="container">
<h2>Where To Find Us</h2>
<div id="map"></div>
    <script>
        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(  -0.504823, 117.143615),
          zoom: 16
        });
        var infoWindow = new google.maps.InfoWindow;
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkXET2qeGgLJOS6BR23VZLIgalJk4zxDo&callback=initMap">
    </script>
</div>
</body>
<footer class="page-footer font-small mt-4">

</footer>
</html>

