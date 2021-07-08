<?php 
$idd = $_GET["id"];
require 'fungsi.php'; 
session_start();
  if (!isset($_SESSION['username'])){
  header("Location:login.php");
} 
if (hapus_admin($idd)> 0 ) {
			echo "<script> 
  			   alert('data berhasil dihapus');
  			   document.location.href='profile_admin.php';

  		      </script>";
  	} else {
  			 echo "<script>
  			   alert('data berhasil dihapus');
  			   document.location.href='profile_admin.php';
  			   </script>";
}

 ?>