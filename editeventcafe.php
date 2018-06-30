<?php
session_start();
if(empty($_SESSION['idnow'])){
        header("location: homecafe.php");
  }
  $con = mysqli_connect("localhost", "root", "", "dbcafe");
  $result = mysqli_query($con, "SELECT * FROM eventcafe");

  if (isset($_POST['save']))
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
    $tanggal = $_POST['date'];
    $deskripsi = $_POST['deskripsi'];
    $promo = $_POST['kodepromo'];
    mysqli_query($con, "INSERT INTO eventcafe VALUES (null, '$nama', '$deskripsi', '$tanggal', '$promo', '$image')");
    header("location: dataeventcafe.php");

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
              <a class="nav-link" href="neweventadmincafe.php">New Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admincafe.php">Back</a>
            </li>
            <li class="nav-item">
              <form action="admincafe.php" method="POST">
        <input type="submit" class="btn" name="logout" value="Logout">
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">
          <div class="col-lg-10 col-lg-8 mx-auto text-center">
          <form class="form-horizontal" action="editeventcafe.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="control-group">
              <label class="control-label" for="nama">Nama Event</label>
              <div class="controls">
                <input type="text" name="nama"  value="<?php echo $_GET['namaevent'] ?>" placeholder="" class="form-control input-lg" required=""><br> <input type="checkbox" name="butuh" onclick="cekpromo()" placeholder="" id="cb1">Centang jika menggunakan kode promo <br><br>
                <p id="kp" style="display: none">Kode Promo: <input type="text" name="kodepromo" value="<?php echo $_GET['kodepromo'] ?>"></p><br>
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
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="desc">Deskripsi Event</label>
              <div class="controls">
               <textarea rows="15" cols="60" placeholder="Masukkan deskripsi..." name="deskripsi"><?php echo $_GET['deskripsi']; ?></textarea> <br>
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="ug">Upload Gambar</label>
              <div class="controls">
                <input type="file"  class="btn btn-default btn-file" name="upload" id="upload"> *harus berupa .jpg<br><br>
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="tglevent">Tanggal Event</label>
              <div class="controls">
                <input type="date" name="tanggal" placeholder="" min="2018-01-01"  value="<?php echo date('Y-m-d',strtotime($_GET['tanggal'])); ?>" class="form-control input-lg" required="">
              </div>
            </div>

            <div class="control-group">
              <!-- Button -->
              <br>
              <div class="controls">
                <input type="submit" name="save" class="btn btn-success btn-block" value="Save Event">
              </div>
            </div>
          </fieldset>
        </form>
        <form action="dataeventcafe.php" action="post">
        <button class="btn btn-warning" style="color: white;">Cancel</button>
        </form>
        </div>
      </div>
</body>
</html>