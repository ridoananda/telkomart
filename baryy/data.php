<?php 
require 'akses/admin/fungsi.php';
$barang = query("SELECT * from barang");
 ?>
<!DOCTYPE html>
<html<head>

	<title>telkomart</title>
</head>
<body>
<form action="search.php" method="GET">
	<label> <h3>Nama Barang : </h3></label>
	<input type="text" name="q">
	<button type="submit" >pencarian</button>
</form>
	<form action="" method="POST">
	<input type="hidden" name="">
	<div><h3>harga barang:</h3>
		<div><input type="text" name=""></div>
	</div>
	<div><h3>jumlah barang:</h3>
		<div><input type="text" name=""></div>
	</div>
	<div><h3>total harga:</h3>
		<div><input type="text" name=""></div>
	</div>
	</form>
</body>
</html>