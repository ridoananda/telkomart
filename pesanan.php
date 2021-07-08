<?php
include 'function.php';
$pesanan = query('SELECT * FROM pesanan WHERE is_dibayar = 0');
$query = mysqli_query($db, "SELECT SUM(total_harga) AS total_harga FROM pesanan WHERE is_dibayar = 0");
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
          <th>Aksi</th>
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
            <td>
              <a href="ubah_pesanan.php?id=<?= $data['id'] ?>">
                <button>Ubah</button>
              </a>
              <form action="hapus_pesanan.php?id=<?= $data['id'] ?>" method="post">
                <button type="submit" name="hapus" onclick="return confirm('Yakin dihapus??')">
                  Hapus
                </button>
              </form>
            </td>
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
      <a href="add_pesanan.php">
        <button class="button">kembali</button>
      </a>
      <a href="add_pesanan.php" class="tambah">
        <button class="button">Tambah</button>
      </a>
      <a href="bayar.php">
        <button class="button">Bayar</button>
      </a>
      <form action="hapus_semua.php" method="post">
        <a href="">
          <button class="button" name="hapusss">Hapus semua</button>
        </a>
      </form>
    </div>
  </div>

  <script>
    const hapus = document.querySelector("#hapus")
    hapus.addEventListener('click', (e) => {
      e.preventDefault()
      return confirm("Yakin Dihapus??")
    })
  </script>
</body>

</html>