<?php
	require_once("connect1.php");
?>
<html>
<head>
</head>

<body>
	<form method = "post" action = "editfood.php">
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
				<td><input type = "text" name = "image"></td>
			</table>
			<tr>
			<td>Type</td>
			<select name="type">
			<option >Appertizer</option>
			<option >Main Course</option>
			<option >Dessert</option>
			</select><br>
		</tr>
		<form action="admincafe.php" method="post">
		<input type = "submit" value = "Edit Data">
		<button class="btn btn-warning"><a href="datamenumakanan.php" style="text-decoration: none;">Cancel</a></button>
	</form>
	</body>
</html>