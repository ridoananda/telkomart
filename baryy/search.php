<?php 
require 'akses/admin/fungsi.php';
$barang = query("SELECT * from barang");
$judul = filter_var($_GET["q"], FILTER_SANITIZE_STRING);

$search = mysqli_query($conn,"SELECT * FROM barang where nama_barang LIKE '%$judul%'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>telkomart</title>
</head>
<body>
<form action="search.php" method="GET">
	<label> <h3>Cari Barang : </h3></label>
	<input type="text" name="q">
	<button type="submit" >pencarian</button>
</form>
<form action="" method="POST">
	<div>
		<?php foreach ($search as $key):?>
			<a href="" name="dandi">
		<div> 
			<h3><?= $key["nama_barang"] ?></h3>
			<img width="200" src="akses/admin/gambar/<?=$key['gambar_barang']  ?>">
		</div></a>
	<?php endforeach;?>
	</div>
</form>

<form action="" method="POST">
	<input type="text" name="namabarang1" value="">
	<input type="hidden" name="">
	<div><h3>harga barang:</h3>
		<div><input type="text" name="" value=""></div>
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