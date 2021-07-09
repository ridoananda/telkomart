<?php
include 'function.php';
if (isset($_POST['tambah'])) {
  add_pegawai($_POST);
  echo "<script>
    alert('Berhasil ditambah!')
    window.location.href = 'pesanan.php'
  </script>";
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
      <form method="POST" action="">
        <label for="nama">Nama Pegawai</label>
        <input type="text" name="nama_pegawai" required>
        <button type="submit" name="tambah">Tambah</button>
        <br>
      </form>
    </div>
  </div>


</body>

</html>