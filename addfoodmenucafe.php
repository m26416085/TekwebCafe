<?php

$db = mysqli_connect("127.0.0.1","root","","dbcafe") or die(mysqli_error($db));
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
	<form method = "post" action = "addfood.php" enctype = "multipart/form-data">
		 <div class="col-lg-10 col-lg-8 mx-auto text-center">
		<table>
			<tr>
				<td>Name</td>
				<td><input type = "text" name = "name"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type = "text" name = "price"></td>
			</tr>
		</table>
			<tr>
			  <div class="control-group">
              <label class="control-label" for="desc">Deskripsi Makanan</label>
              <div class="controls">
               <textarea rows="15" cols="60" placeholder="Masukkan deskripsi..." name="deskripsi"></textarea> <br>
              </div>
            </div>
			</tr>
			<br>
			<td>Image</td>
			<table>
			<tr>
				<input type="file" class="btn btn-default btn-file" name="upload" id="upload"><br>
			</tr>
		</table>

			<tr>
			<td>Type</td>
			<select name="type">
			<option >Appertizer</option>
			<option >Main Course</option>
			<option >Dessert</option>
			</select><br>
		</tr>
		<form action="admincafe.php" method="post">
		<input type = "submit" value = "Add Data"  class="btn btn-success">
		<button class="btn btn-warning"><a href="datamenumakanan.php" style="text-decoration: none;">Cancel</a></button>
		</form>
	</body>
</html>


