<?php
require_once("connect1.php");
session_start();
if(empty($_SESSION['idnow'])){
        header("location: homecafe.php");
}
$id = $_POST["id"];
$name = $_POST["name"];
$price= $_POST["price"];
$description = $_POST["deskripsi"];
$image =basename($_FILES["upload"]["name"]);
$type = $_POST["type"];
mysqli_query($db, "UPDATE food SET nama_makanan = '".$name."', harga_makanan = '".$price."', jumlah_pemesanan_makanan = '".NULL."', deskripsi_makanan = '".$description."', image_makanan = '".$image."', tipe_makanan = '".$type."' where id_makanan='".$id."'");
header("Location:datamenumakanan.php");
?>