<?php
require_once("connect1.php");
$id = $_POST["id"];
$name = $_POST["name"];
$price= $_POST["price"];
$jumlah = $_POST["jumlah"];
$description = $_POST["description"];
$image = $_POST["image"];
$type = $_POST["type"];
mysqli_query($db, "insert into drink(id_minuman, nama_minuman, harga_minuman, jumlah_pemesanan_minuman, deskripsi_minuman, image_minuman, tipe_minuman) values('$id','$name','$price','$jumlah','$description','$image','$type') ") or die(mysqli_error($db));
header("Location:admincafe.php");
?> 