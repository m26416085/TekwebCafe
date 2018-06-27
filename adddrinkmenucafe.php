<?php
$db = mysqli_connect("127.0.0.1","root","","dbcafe") or die(mysqli_error($db));
?>
<html>
<head>
</head>

<body>
	<form method = "post" action = "adddrink.php" enctype = "multipart/form-data">
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
			 <div class="control-group">
              <label class="control-label" for="desc">Deskripsi Event</label>
              <div class="controls">
               <textarea rows="15" cols="60" placeholder="Masukkan deskripsi..." name="deskripsi"></textarea> <br>
              </div>
            </div>
			</tr>
			<br>
			<td>Image</td>
			<table>
			<tr>
				<input type="file" name="upload" id="upload"><br>
			</tr>
		</table>
			<td>Type</td>
			<select name="type">
			<option >Drinks</option>
			</select><br>
		<form action="admincafe.php" method="post">
		<input type = "submit" value = "Add Data">
		<input type="submit" name="back" value="Kembali">
	</form>
	</body>
</html>