<?php
include 'function.php';
$id = $_GET['id'];
$pesanan = get_pesanan($id);
$barang = get_barang_by_pesanan($pesanan["barang_id"]);
$hasil = false;

if (isset($_GET['cari_barang'])) {
  $hasil = true;
  $cari_barang = $_GET['cari_barang'];
  $result = cari_barang($cari_barang);
}
if (isset($_GET['nama_barang'])) {
  $nama_barang = $_GET['nama_barang'];
  $result_barang = cari_detail_barang($nama_barang);
}

if (isset($_POST['lanjut'])) {
  if (ubah_pesanan($_POST, $id)) {
    echo "<script>
      alert('Berhasil diubah!')
      window.location.href = 'pesanan.php'
    </script>";
  } else {
    echo mysqli_errno($db);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Tambah Barang</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <form method="GET" action="">
        <label for="nama">Nama barang</label>
        <input type="text" name="cari_barang" value="<?= isset($_GET['nama_barang']) ? $_GET['nama_barang'] : $barang['nama_barang']; ?>">
        <button type="submit">Cari</button>
        <br>
        <?php if ($hasil) : ?>
          <?php foreach ($result as $data) : ?>
            <img src="img/<?= $data['gambar_barang']; ?>" width="40" height="40"> <?= $data['nama_barang']; ?> - <a href="ubah_pesanan.php?nama_barang=<?= $data['nama_barang']; ?>">Pilih</a>
            <br>
          <?php endforeach ?>
          <?php if (!$result) : ?>
            <span style="color: red">Barang tidak ditemukan!</span>
          <?php endif ?>
        <?php endif ?>
      </form>
      <form method="post" action="">
        <input name="barang_id" type="hidden" value="<?= isset($result_barang) ? $result_barang['id_barang'] : $barang['id_barang']; ?>">
        <label for="harga">Harga barang</label>
        <input type="text" name="harga_barang" value="<?= isset($result_barang) ? $result_barang['harga_barang'] : $barang['harga_barang']; ?>" class="harga_barang">
        <br>
        <label for="jumlah">Jumlah Barang</label>
        <input type="number" name="jumlah_barang" class="jumlah_barang" required value="<?= $pesanan ? $pesanan["jumlah_barang"] : '' ?>">
        <br>
        <label for="jumlah">Total harga</label>
        <input type="number" readonly name="total_harga" class="total_harga" value="<?= $pesanan ? $pesanan["total_harga"] : '' ?>">
        <br>
        <br>
        <a href="pesanan.php">
          <button type="button" class="button">Batal</button>
        </a>
        <button type="submit" name="lanjut" class="button">Ubah</button>
      </form>
    </div>
  </div>

  <script>
    const total_harga = document.querySelector('.total_harga')
    const harga_barang = document.querySelector('.harga_barang')
    const jumlah_barang = document.querySelector('.jumlah_barang')
    jumlah_barang.addEventListener('keyup', function(e) {
      console.log(e)
      total_harga.value = harga_barang.value * jumlah_barang.value
    })
    jumlah_barang.addEventListener('change', function(e) {
      console.log(e)
      total_harga.value = harga_barang.value * jumlah_barang.value
    })
  </script>
</body>

</html>