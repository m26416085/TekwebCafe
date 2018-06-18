<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$result = mysqli_query($con, "SELECT * FROM eventcafe");


	if (isset($_POST['tambah']))
	{
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		   $check = getimagesize($_FILES["upload"]["tmp_name"]);
		   if($check !== false) {
		       echo "File is an image - " . $check["mime"] . ".";
		       $uploadOk = 1;
		   } else {
		       echo "File is not an image.";
		       $uploadOk = 0;
		   }
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["upload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
		    	$image=basename( $_FILES["upload"]["name"]);
		        echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

	    $image=basename( $_FILES["upload"]["name"]); // used to store the filename in a variable
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$deskripsi = $_POST['deskripsi'];
		$promo = $_POST['kodepromo'];
		mysqli_query($con, "INSERT INTO eventcafe VALUES (null, '$nama', '$deskripsi', '$tanggal', '$promo', '$image')");
		header("location: dataeventcafe.php");
	}
	else if (isset($_POST['cancel']))
	{
		header("location: dataeventcafe.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="neweventadmincafe.php" method="post" enctype="multipart/form-data">
		Nama Event: <input type="text" name="nama"> <input type="checkbox" name="butuh" onclick="cekpromo()" id="cb1">Centang jika menggunakan kode promo <br>
		Deskripsi Event: <br><textarea rows="15" cols="60" placeholder="Masukkan deskripsi..." name="deskripsi"></textarea> <br>
		Tanggal Event: <input type="date" name="tanggal""> <br>
		Upload Gambar: <input type="file" name="upload" id="upload"> *harus berupa .jpg<br>
		<p id="kp" style="display: none">Kode Promo: <input type="text" name="kodepromo"></p><br>
		<script type="text/javascript">
			function cekpromo(){
				var test = document.getElementById("kp");
				if (document.getElementById("cb1").checked == true){
					test.style.display = "block";
				}
				else{
					test.style.display = "none";
				}
			}
		</script>
		<input type="submit" name="tambah" value="Tambah Event">
		<input type="submit" name="cancel" value="Batal">
	</form>
</body>
</html>