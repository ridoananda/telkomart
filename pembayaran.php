<?php
include 'function.php';
$id = $_GET['id'];
$pesanan = query("SELECT * FROM pesanan WHERE is_dibayar = 1 AND pembayaran_id = '{$id}'");
$query = mysqli_query($db, "SELECT SUM(total_harga) AS total_harga FROM pesanan");
$total_pembayaran = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <title>Telkomart</title>
</head>

<body>
  <div class="container">
    <div class="row-center">
      <table>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>jumlah</th>
          <th>Total Harga</th>
        </tr>
        <?php
        $no = 1;
        foreach ($pesanan as $data) :
          $barang = query("SELECT * FROM barang WHERE id_barang = '{$data['barang_id']}'")[0];
        ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $barang['nama_barang']; ?></td>
            <td><?= $barang['harga_barang']; ?></td>
            <td><?= $data['jumlah_barang']; ?></td>
            <td>Rp. <?= $data['total_harga']; ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
    <span class="row-end">
      Total pembayaran: Rp. <span class="total_pembayaran">
        <?= $total_pembayaran['total_harga'] ?>
      </span>
    </span>
    <div class="row-end action">
      <a href="cetak.php?id=<?= $id; ?>">
        <button class="button">Cetak</button>
      </a>
    </div>
  </div>

</body>

</html>