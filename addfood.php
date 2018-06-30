<?php
session_start();
if(empty($_SESSION['idnow'])){
        header("location: homecafe.php");
}
$db = mysqli_connect("127.0.0.1","root","","dbcafe") or die(mysqli_error($db));
$id = $_POST["id"];
$name = $_POST["name"];
$price= $_POST["price"];
$description = $_POST["deskripsi"];
$image = basename($_FILES["upload"]["name"]);
$type = $_POST["type"];

mysqli_query($db, "insert into food(id_makanan, nama_makanan, harga_makanan, jumlah_pemesanan_makanan, deskripsi_makanan, image_makanan, tipe_makanan) values('$id','$name','$price','$jumlah','$description','$image','$type') ") or die(mysqli_error($db));
header("Location:datamenumakanan.php");
?> 