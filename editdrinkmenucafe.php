<?php
	require_once("connect1.php");
?>
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
              <a class="nav-link js-scroll-trigger" href="datamenuminuman.php">Back</a>
            </li>
            <li class="nav-item">
            	<form action="admincafe.php" method="POST">
				<input type="submit" class="btn" name="logout" value="Logout">
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <form method = "post" action = "editdrink.php" enctype = "multipart/form-data">
		 <div class="col-lg-10 col-lg-8 mx-auto text-center">

		 	 <div class="control-group">
              <label class="control-label" for="id">ID</label>
              <div class="controls">
                <input type="text" name="id" placeholder="" class="form-control input-lg" value="<?php echo $_GET['id_minuman']; ?>" readOnly>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="name">Name</label>
              <div class="controls">
               <input type = "text" class="form-control input-lg"  value="<?php echo $_GET['nama_minuman']; ?>" name = "name">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="price">Price</label>
              <div class="controls">
               <input type = "text" class="form-control input-lg"  value="<?php echo $_GET['harga_minuman']; ?>" name = "price" >
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label" for="desc">Deskripsi Minuman</label>
              <div class="controls">
               <textarea rows="15" cols="60" placeholder="Masukkan deskripsi..." name="deskripsi"> <?php echo $_GET['deskripsi_minuman']; ?></textarea> <br>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="img">Upload Image</label>
              <div class="controls">
               <input type = "file"  class="btn btn-default btn-file" name = "upload"> <br>
              </div>
            </div>
			
			 <div class="control-group">
              <label class="control-label" for="type">Type</label>
              <div class="controls">
               	<select name="type">
				<option >Drinks</option>
				</select><br><br>
              </div>
            </div>
		<input type = "submit" class="btn btn-success" value = "Add Data">
	</form>
	<form action="datamenuminuman.php" action="post">
    <button class="btn btn-warning" style="color: white;">Cancel</button>
  	</form>
	</body>
</html>