<?php
session_start();
	if(empty($_SESSION['idnow'])){
    header("location: homecafe.php");
	}
	else 
	{
	$con = mysqli_connect("localhost", "root", "", "dbcafe");
	$id = $_GET['id'];
		if($_SESSION['idnow']==$id)
		{
			mysqli_query($con,"DELETE FROM membercafe WHERE id='$id'");
			header("location: homecafe.php");
		}
		else
		{
			echo "<script type=\"text/javascript\">alert('Cant Delete Other Member!');</script>";
		}
		header("location: homecafe.php");
	}
?>