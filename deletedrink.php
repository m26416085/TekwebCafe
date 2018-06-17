<?php
//del php
require_once("connect1.php");
$id = $_GET["id"];
mysqli_query($db,"DELETE from drink where id_minuman = $id") or die(mysqli_error($db));
header("Location:datamenuminuman.php"); //redirect
?>