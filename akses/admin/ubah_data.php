<?php 
require 'fungsi.php';

$kategori =query("SELECT * FROM barang");
$idd = filter_var($_GET["id"], FILTER_SANITIZE_STRING);
if (!is_numeric($idd)) {
   echo "mau ngehek?? coba aja kalau bisa";
   exit;
}

$data = query("SELECT * from barang where id_barang=$idd")[0];

  if (isset($_POST["submit"])){
    if (ubah_data($_POST)>0 ) {
      echo "<script> 
           alert('data berhasil diupdate');
           document.location.href='dashboard.php';

            </script>";
    }
    else{
      echo "<script> 
           alert('data gagal diupdate!!');
            </script>";
    }
  }
  if(isset($_POST["cancel"])){
      echo "<script> 
           alert('tidak ingin menambahkan data ?');
           document.location.href='dashboard.php';
           </script>";
    }

 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
 <style>
   
   * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

.styled-select { 
  width: 200px; 
  height: 34px; 
  overflow: hidden; 
  background: no-repeat right #f1f1f1; 
  border: 1px solid #ccc; 
  border-radius: 5px; 
  -webkit-border-radius: 5px; 
  transition:ease all 0.3s; 
  -webkit-transition:ease all 0.3s; } 
.styled-select:hover{ 
    box-shadow:0 0 7px 5px #f1f1f1 } 
.styled-select select { 
  background: transparent; 
  width: 220px; 
  padding: 5px; 
  font-size: 16px; 
  line-height: 1; 
  border: 0; 
  border-radius: 0; 
  height: 34px; 
  -webkit-appearance: none; } 
.styled-select select { 
  color: black; 
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 11px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}
.registerbtn2 {
  background-color:#e32a00;
  color: white;
  padding: 11px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity:1;
}
.registerbtn2:hover {
  opacity:4;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.atas{
  text-align: center;
  padding: 12px;
} 
 </style>


</head>
<body>
<?php 
  session_start();
  if (!isset($_SESSION['username'])){
  header("Location:login.php?=belum_login");
}
?>  
<form action="" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="atas">
    <h1>UPDATE DATA PRODUK</h1>
    </div>
    <hr >
     <input type="hidden" name="id" value="<?=$data["id_barang"]?>">
    <input type="hidden" name="gambarLama" value="<?=$data["gambar_barang"]?>">
    <label for="Nama"><b>Kode Barang :</b></label>
    <input type="text" placeholder="Masukkan Nama Barang" name="kode" value="<?=$data['kode_barang']; ?>" >
    <label for="Nama"><b>Nama Barang :</b></label>
    <input type="text" placeholder="Masukkan Nama Barang" name="nama" value="<?=$data['nama_barang']; ?>" >

    <label for="gambar"><b>Masukkan Gambar panel post :</b></label><br><br>
    <img width="100" src="gambar/<?=$data['gambar_barang']; ?>">
    <br><br>
    <input type="file" id="myFile" name="gambar" ><br><br>
    <label for="Nama"><b>Stok Barang :</b></label>
    <input type="text" placeholder="Masukkan Stok Barang" name="stok" value="<?=$data['stok_barang']; ?>" ><br><br>
    <label for="Nama"><b>Harga Barang :</b></label><div>Rp.</div>
    <input type="text" placeholder="Masukkan Harga Barang" name="harga" value="<?=$data['harga_barang']; ?>">
  
      <hr>
  <center>
    <button type="submit" class="registerbtn" name="submit">Simpan Data</button>
    <button type="submit" class="registerbtn2" name="cancel">Cancel</button>
</center>
  </div>


</form>

</body>
</html>