<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$id = $_GET['idevent'];
	mysqli_query($con,"DELETE FROM eventcafe WHERE idevent='$id'");
	header("location: dataeventcafe.php");
?>