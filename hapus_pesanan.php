<?php
include 'function.php';

if (isset($_POST["hapus"])) {
  $id = $_GET["id"];
  $query = "DELETE FROM pesanan WHERE id = '{$id}'";
  $result = mysqli_query($db, $query);
  if (mysqli_affected_rows($db) > 0) {
    echo "<script>
      alert('Berhasil dihapus!')
      window.location.href = 'pesanan.php'
      </script>";
  } else {
    echo "<script>
      alert('Gagal dihapus!')
      window.location.href = 'pesanan.php'
    </script>";
  }
  
}