<?php 
require 'function.php';
 if(isset($_POST['hapusss'])){
 mysqli_query($db,"DELETE FROM pesanan WHERE id");
echo "<script> 
  			   alert('data berhasil dihapus');
  			   document.location.href='add_pesanan.php';

  		      </script>";
  	} else {
  			 echo "<script>
  			   alert('data berhasil dihapus');
  			   document.location.href='add_pesanan.php';
  			   </script>";
}

 ?>