<?php

$db = mysqli_connect("127.0.0.1","root","","dbcafe") or die(mysqli_error($db));
?>
<html>
<head>
</head>

<body>
	<form method = "post" action = "addfood.php" enctype = "multipart/form-data">
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
		</table>
			<tr>
			<td>Description</td>
			<textarea></textarea>
			</tr>
			<br>
			<td>Image</td>
			<table>
			<tr>
				<input type="file" name="upload" id="upload"><br>
			</tr>
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
		<input type = "submit" value = "Add Data">
		<button class="btn btn-warning"><a href="datamenumakanan.php" style="text-decoration: none;">Cancel</a></button>
		</form>
	</body>
</html>


