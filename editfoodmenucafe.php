<?php
	require_once("connect1.php");
?>
<html>
<head>
</head>

<body>
	<form method = "post" action = "editfood.php"  enctype = "multipart/form-data">
		<table>
			 <div class="control-group">
              <label class="control-label" for="id">ID</label>
              <div class="controls">
                <input type="text" name="id" placeholder="" class="form-control input-lg" value="<?php echo $_GET['id']; ?>" readOnly>
              </div>
            </div>
			<tr>
				<td>Name</td>
				<td><input type = "text" name = "name"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type = "text" name = "price"></td>
			</tr>
		</table>
			<tr>
			<div class="control-group">
              <label class="control-label" for="desc">Deskripsi Makanan</label>
              <div class="controls">
               <textarea rows="15" cols="60" placeholder="Masukkan deskripsi..." name="deskripsi"></textarea> <br>
              </div>
            </div>
			</tr>
			<table>
			<tr>
				<td>Image</td>
				<td><input type = "file" name = "upload"></td>
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
		<input type = "submit" value = "Edit Data">
		<button class="btn btn-warning"><a href="datamenumakanan.php" style="text-decoration: none;">Cancel</a></button>
	</form>
	</body>
</html>