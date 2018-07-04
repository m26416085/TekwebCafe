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
$image = basename( $_FILES["upload"]["name"]);
$type = $_POST["type"];
mysqli_query($db, "UPDATE drink SET nama_minuman = '".$name."', harga_minuman = '".$price."', jumlah_pemesanan_minuman= '".NULL."', deskripsi_minuman = '".$description."', image_minuman = '".$image."', tipe_minuman = '".$type."' where id_minuman='".$id."'");
header("Location:datamenuminuman.php");
?>