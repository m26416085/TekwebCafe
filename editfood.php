<?php
require_once("connect1.php");
$id = $_POST["id"];
$name = $_POST["name"];
$price= $_POST["price"];
$jumlah = $_POST["jumlah"];
$description = $_POST["description"];
$image = $_POST["image"];
$type = $_POST["type"];
mysqli_query($db, "UPDATE food SET nama_makanan = '$name', harga_makanan = '$price', jumlah_pemesanan_makanan = '$jumlah', deskripsi_makanan = '$description', image_makanan = '$image', tipe_makanan = '$type' where id_makanan='$id'") or die(mysqli_error($db));
header("Location:admincafe.php");
?>