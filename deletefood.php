<?php
//del php
require_once("connect1.php");
$id = $_POST["id"];
mysqli_query($db,"DELETE from food where id_makanan = $id") or die(mysqli_error($db));
header("Location:admincafe.php"); //redirect
?>