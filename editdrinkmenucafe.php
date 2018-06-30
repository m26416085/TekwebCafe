<?php
	require_once("connect1.php");
?>
<html>
<head>
</head>

<body>
	<form method = "post" action = "editdrink.php" enctype = "multipart/form-data">
		<table>
			
			ID: <br>
			<input type="text" name="id">

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
		</table>
			<tr>
				<td>Description</td>
			<textarea name="description"></textarea>
			</tr>
			<table>
			<tr>
				<td>Image</td>
				<td><input type = "file" name = "image"></td>
			</tr>
		</table>
			<td>Type</td>
			<select name="type">
			<option >Drinks</option>
			</select><br>
		<form action="datamenuminuman.php" method="POST">
		<input type = "submit" value = "Edit Data">
		<input type="submit" name="back" value="Kembali">
	</form>
	</body>
</html>