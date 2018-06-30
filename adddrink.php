<?php
$db = mysqli_connect("127.0.0.1","root","","dbcafe") or die(mysqli_error($db));
$id = $_POST["id"];
$name = $_POST["name"];
$price= $_POST["price"];
$jumlah = $_POST["jumlah"];
$description = $_POST["deskripsi"];
$image=basename( $_FILES["upload"]["name"]);
$type = $_POST["type"];
mysqli_query($db, "insert into drink(id_minuman, nama_minuman, harga_minuman, jumlah_pemesanan_minuman, deskripsi_minuman, image_minuman, tipe_minuman) values('$id','$name','$price','$jumlah','$description','$image','$type') ") or die(mysqli_error($db));
header("Location:datamenuminuman.php");
?> 