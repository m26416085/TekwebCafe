<?php
	require_once("connect1.php");
?>
<html>
<head>
</head>

<body>
	<form method = "post" action = "editdrink.php">
		<table>
			<tr>
				<td>Id</td>
				<td><input type = "text" name = "id"></td>
			</tr>
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
				<td><input type = "text" name = "image"></td>
			</tr>
			<select name="type">
			<option >Drinks</option>
			</select><br>
		</table>
		<form action="admincafe.php" method="post">
		<input type = "submit" value = "Edit Data">
		<input type="submit" name="back" value="Kembali">
	</form>
	</body>
</html>