<?php
//add php
require_once("connect1.php");
//1. cek apakah sudah ada _POST
//2. ambil semua post, buatkan query "insert into";
//3. redirect ke halaman read.php
?>
<html>
<head>
</head>

<body>
	<form method = "post" action = "adddrink.php">
		<table>
			<tr>
				<td>Name</td>
				<td><input type = "text" name = "name"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type = "text" name = "price"></td>
			</tr>
			<tr>
				<td>Jumlah Pemesanan</td>
				<td><input type = "text" name = "jumlah"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type = "textarea" name = "description"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type = "blob" name = "image"></td>
			</tr>
			<select name="type">
			<option >Drinks</option>
			</select><br>
		</table>
		<form action="admincafe.php" method="post">
		<input type = "submit" value = "Add Data">
		<input type="submit" name="back" value="Kembali">
	</form>
	</body>
</html>