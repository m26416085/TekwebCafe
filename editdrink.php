<?php
require_once("connect1.php");
session_start();
if(empty($_SESSION['idnow'])){
        header("location: homecafe.php");
	}
$id = $_POST["id"];
$name = $_POST["name"];
$price= $_POST["price"];
$jumlah = $_POST["jumlah"];
$description = $_POST["description"];
$image = basename( $_FILES["image"]["name"]);
$type = $_POST["type"];
mysqli_query($db, "UPDATE drink SET nama_minuman = '".$name."', harga_minuman = '".$price."', jumlah_pemesanan_minuman= '".$jumlah."', deskripsi_minuman = '".$description."', image_minuman = '".$image."', tipe_minuman = '".$type."'  where id_makanan='".$id."'");
header("Location:datamenuminuman.php");
?>