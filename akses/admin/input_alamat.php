<?php 
  require 'fungsi.php';
  if (isset($_POST["submit"])){
    if (tambah_alamat($_POST)>0 ) {
      echo "<script> 
           alert('data berhasil ditambahkan');
           document.location.href='dashboard.php';

            </script>";
    }
    else{
      echo "data gagal ditambahkan";
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
    <h1>DATA BANNER</h1>
    </div>
    <hr >

    <label for="Nama"><b>Masukan alamat Lengkap :</b></label>
    <input type="text" placeholder="Masukkan Alamat Lengkap" name="nama"  >

    <label for="Nama"><b>Daerah : </b></label>
    <input type="text" placeholder="Masukkan Daerah Toko" name="daerah"  >


  
      <hr>
  <center>
    <button type="submit" class="registerbtn" name="submit">Simpan Data</button>
    <button type="submit" class="registerbtn2" name="cancel">Cancel</button>
</center>
  </div>


</form>

</body>
</html>