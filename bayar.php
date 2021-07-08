<?php
include 'function.php';

$pesanan = query('SELECT * FROM pesanan');
$query = mysqli_query($db, "SELECT SUM(total_harga) AS total_harga FROM pesanan WHERE is_dibayar = 0");
$total_pembayaran = mysqli_fetch_assoc($query);

if (isset($_POST['kirim'])) {
  add_pembayaran($_POST);
  $add = ubah_pesanan_after_dibayar($_POST);
  $pembayaran = query('SELECT * FROM pembayaran ORDER BY id DESC')[0];
  header("Location: pembayaran.php?id={$pembayaran['id']}");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Bayar - Telkomart</title>
</head>

<body>
  <div class="container">
    <form action="" method="POST">
      <input type="hidden" name="total_harga" value="<?= $total_pembayaran['total_harga'] ?>">
      <div class="row">
        Total Harga: Rp. <span id="total_harga"><?= $total_pembayaran['total_harga'] ?></span>
        <br>
        <label for="bayar">Bayar : </label>
        <input type="number" id="bayar" placeholder="Rp." name="bayar">
        <br>
        Uang kembali: Rp. <span id="uang_kembali"></span>
        <br>
        <br>
        <button class="button" type="submit" name="kirim">kirim</button>
      </div>
    </form>
  </div>

  <script>
    const total_harga = document.querySelector("#total_harga")
    const bayar = document.querySelector("#bayar")
    const uang_kembali = document.querySelector("#uang_kembali")
    bayar.addEventListener('keyup', () => {
      uang_kembali.innerHTML = bayar.value - total_harga.innerHTML
    })
    bayar.addEventListener('change', () => {
      uang_kembali.innerHTML = bayar.value - total_harga.innerHTML
    })
  </script>
</body>

</html>