<?php 
$idd = $_GET["id"];
require 'fungsi.php';

if (hapus_karyawan($idd)> 0 ) {
			echo "<script> 
  			   alert('data berhasil dihapus');
  			   document.location.href='data_kasir.php';

  		      </script>";
  	} else {
  			 echo "<script>
  			   alert('data berhasil dihapus');
  			   document.location.href='data_kasir.php';
  			   </script>";
}

 ?>