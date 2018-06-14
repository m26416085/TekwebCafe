<?php
require_once("connect1.php");
$id = $_POST["id"];
$name = $_POST["name"];
$price= $_POST["price"];
$jumlah = $_POST["jumlah"];
$description = $_POST["description"];
$image = $_POST["image"];
$type = $_POST["type"];

mysqli_query($db, "insert into food(id_makanan, nama_makanan, harga_makanan, jumlah_pemesanan_makanan, deskripsi_makanan, image_makanan, tipe_makanan) values('$id','$name','$price','$jumlah','$description','$image','$type') ") or die(mysqli_error($db));
header("Location:admincafe.php");
?> 