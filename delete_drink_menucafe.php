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
	<form method = "post" action = "deletedrink.php">
		<table>
			<tr>
				<td>Id</td>
				<td><input type = "text" name = "id"></td>
			</tr>
		</table>
		<form action="admincafe.php" method="post">
		<input type = "submit" value = "Delete Data">
		<input type="submit" name="back" value="Kembali">
	</form>
	</body>
</html>