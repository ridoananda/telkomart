<?php 
require 'fungsi.php';

$barang = query(" SELECT * FROM barang");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TELKOMART</title>
	<link rel="stylesheet" type="text/css" href="file.css">
</head>
<body>
	
 <table>
        <tr>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok</th>
        </tr>
 		<?php $i = 1 ;
 		foreach ($barang as $databarang ):?>
        <tr>
            <td align="center"><?= $i++; ?></td>
            <td align="center"><?= $databarang["nama_barang"] ?></td>
            <td>Rp. <?= $databarang["harga_barang"] ?></td>
            <td align="center"><?= $databarang["stok_barang"] ?></td>
        </tr>
 		<?php endforeach; ?>
    </table>
</body>
</html>
