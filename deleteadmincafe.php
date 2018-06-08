<?php
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$id = $_GET['id'];
	mysqli_query($con,"DELETE FROM admincafe WHERE id='$id'");
	header("location: dataadmincafe.php");
?>