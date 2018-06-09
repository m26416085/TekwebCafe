<?php
//del php
require_once("connect1.php");
$id = $_POST["id"];
mysqli_query($db,"DELETE from drink where id_minuman = $id") or die(mysqli_error($db));
header("Location:admincafe.php"); //redirect
?>