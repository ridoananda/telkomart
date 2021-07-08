<?php 
$idd = $_GET["id"];
require 'fungsi.php';

if (hapus_galery($idd)> 0 ) {
			echo "<script> 
  			   alert('data berhasil dihapus');
  			   document.location.href='dashboard.php';

  		      </script>";
  	} else {
  			 echo "<script>
  			   alert('data berhasil dihapus');
  			   document.location.href='dashboard.php';
  			   </script>";
}

 ?>