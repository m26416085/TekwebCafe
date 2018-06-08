<?php
//del php
require_once("connect1.php");
$id1 = $_GET["id"];
mysqli_query($db,"DELETE from dbcafe where id_minuman = $id1") or die(mysqli_error($db));
header("Location:read.php"); //redirect
?>