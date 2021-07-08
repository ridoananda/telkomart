<?php 

$conn = mysqli_connect("localhost","root","","telkomart");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row ;
	}
	return $rows;
}

function tambah($data){
 	global $conn;
	$kode 	  = htmlspecialchars($data["kode"]);
	$nama = htmlspecialchars($data["nama"]);
	$harga = htmlspecialchars($data["harga"]);
	$stok = htmlspecialchars($data["stok"]);
	$gambar   = upload();
	if (!$gambar) {
	return false;
	}
	$semua    = "INSERT INTO barang
				 VALUES 
				('','$kode','$nama','$harga','$stok','$gambar')
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}
function tambah_karyawan($data){
 global $conn;

 	$id_karyawan1 	  = htmlspecialchars($data["id_karyawan1"]);
	$nama 	  = htmlspecialchars($data["nama"]);
	$user 	  = htmlspecialchars($data["user"]);
	$pwd 	  = htmlspecialchars($data["pwd"]);

	$semua    = "INSERT INTO kasir
				 VALUES 
				('','$id_karyawan1','$nama','$user','$pwd')
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function tambah_kategori($data){
 global $conn;
	$nama 	  = htmlspecialchars($data["nama"]);
	$gambar  = upload();
	
	if (!$gambar) {
	return false;
	}
	$semua    = "INSERT INTO kategori
				 VALUES 
				('','$nama','$gambar')
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function tambah_admin($data){
 global $conn;
	$username 	  = htmlspecialchars($data["username"]);
	$password 	  = htmlspecialchars($data["password"]);

	$semua    = "INSERT INTO admin
				 VALUES 
				('','$username','$password')
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}
function tambah_faq($data){
 global $conn;
	$tanya 	  = htmlspecialchars($data["tanya"]);
	$syarat 	  = htmlspecialchars($data["syarat"]);

	$semua    = "INSERT INTO faq
				 VALUES 
				('','$tanya','$syarat')
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}
function tambah_galery($data){
 global $conn;
	$nama 	    = htmlspecialchars($data["nama"]);
	$deskripsi  = htmlspecialchars($data["deskripsi"]);
	$sosmed  = htmlspecialchars($data["sosmed"]);
	$gambar  = upload();
	if (!$gambar) {
	return false;
	}
	$semua    = "INSERT INTO galery
				 VALUES 
				('','$nama','$deskripsi','$gambar','$sosmed')
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_profile($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$nama 	  = htmlspecialchars($ubahhh["nama_profile"]);
	$no_telp 	  = htmlspecialchars($ubahhh["no_telp"]);
	$username 	  = htmlspecialchars($ubahhh["username"]);
	$gambarLama  = htmlspecialchars($ubahhh["gambarLama"]);
	$deskripsi = htmlspecialchars($ubahhh["deskripsi_profile"]);

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	}else{
		$gambar = upload_profile();
	}
	$semua    = "UPDATE profile_admin SET
				 id = $id,
				 nama_toko='$nama', 
				 deskripsi_toko= '$deskripsi',
				 logo_gambar = '$gambar',
				 no_telepon= '$no_telp',
				 username_ig= '$username'
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_toko($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$nama 	  = htmlspecialchars($ubahhh["nama"]);
	$keterangan  = htmlspecialchars($ubahhh["keterangan"]);
	$bagian_toko  = htmlspecialchars($ubahhh["bagian_toko"]);
	$link_maps  = htmlspecialchars($ubahhh["link_maps"]);
	$copyright  = htmlspecialchars($ubahhh["copyright"]);
	$link  = htmlspecialchars($ubahhh["link"]);
	$informasi  = htmlspecialchars($ubahhh["informasi"]);
	$username_ig  = htmlspecialchars($ubahhh["username_ig"]);
	$username_fb = htmlspecialchars($ubahhh["username_fb"]);
	$gambar_Lama = htmlspecialchars($ubahhh["gambarLama"]);

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambar_Lama;
	}else{
		$gambar = upload();
	}
	$semua    = "UPDATE profile_toko SET
				 nama_toko='$nama', 
				 keterangan_toko= '$keterangan',
				 bagian_toko = '$bagian_toko',
				 logo_toko= '$gambar',
				 username_ig= '$username_ig',
				 username_fb= '$username_fb',
				 link_youtube= '$link',
				 informasi_popup= '$informasi',
				 link_maps= '$link_maps',
				 copyright= '$copyright'

				 WHERE id =$id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_style($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$ft 	  = htmlspecialchars($ubahhh["ft"]);
	$bft  = htmlspecialchars($ubahhh["bft"]);
	$bcp  = htmlspecialchars($ubahhh["bcp"]);
	$blp  = htmlspecialchars($ubahhh["blp"]);
	$bn = htmlspecialchars($ubahhh["bn"]);
	$gambar_Lama = htmlspecialchars($ubahhh["gambarLama"]);

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambar_Lama;
	}else{
		$gambar = upload_style();
	}
	$semua    = "UPDATE warna SET
				 footer_warna='$ft', 
				 border_footer= '$bft',
				 gambar_count= '$gambar',
				 warna_count= '$bcp',
				 warna_list= '$blp',
				 warna_navbar= '$bn'

				 WHERE id =$id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_kategori($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$nama 	  = htmlspecialchars($ubahhh["nama"]);
	$keterangan  = htmlspecialchars($ubahhh["gambarLama"]);

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $keterangan;
	}else{
		$gambar = upload();
	}
	$semua    = "UPDATE kategori SET
				 nama_kategori='$nama',
				 gambar_kategori= '$gambar'

				 WHERE id =$id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_admin($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$nama 	  = htmlspecialchars($ubahhh["nama_profile"]);
	$password 	  = htmlspecialchars($ubahhh["password_profile"]);

	$semua    = "UPDATE admin SET
				 username='$nama', 
				 password= '$password'
				 WHERE id_admin= $id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}


function ubah_count($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$projects 	  = htmlspecialchars($ubahhh["projects"]);
	$client 	  = htmlspecialchars($ubahhh["client"]);
	$created 	  = htmlspecialchars($ubahhh["created"]);
	$customer 	  = htmlspecialchars($ubahhh["customer"]);

	$semua    = "UPDATE count_product SET
				 projects='$projects', 
				 client= '$client',
				 created='$created',
				 customer='$customer'
				 WHERE  id = $id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}
function ubah_about($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$about 	  = htmlspecialchars($ubahhh["about"]);
	$semua    = "UPDATE about SET
				 about_me='$about'
				 WHERE id=$id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}
function ubah_cs($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$nama 	  = htmlspecialchars($ubahhh["nama"]);
	$nomor_wa = htmlspecialchars($ubahhh["nomor_wa"]);
	$nomor_telp = htmlspecialchars($ubahhh["nomor_telp"]);
	$gmail 	  = htmlspecialchars($ubahhh["gmail"]);

	$semua    = "UPDATE customer_service SET
				 nama_cs='$nama',
				 nomor_telepon='$nomor_wa',
				 nomor_wa='$nomor_telp',
				 gmail='$gmail' 
				 WHERE id=$id;
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_jk($ubahhh){
	global $conn;
	$id       = htmlspecialchars($ubahhh["id"]);
	$hari 	  = htmlspecialchars($ubahhh["hari"]);
	$jam = htmlspecialchars($ubahhh["jam"]);

	$semua    = "UPDATE jam_kerja SET
				 hari='$hari',
				 jam='$jam'
				 WHERE id=$id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}
function ubah_data($ubahh){
	global $conn;
	$id       = htmlspecialchars($ubahh["id"]);
	$nama 	  = htmlspecialchars($ubahh["nama"]);
	$kode 	  = htmlspecialchars($ubahh["kode"]);
	$harga 	  = htmlspecialchars($ubahh["harga"]);
	$stok	  = htmlspecialchars($ubahh["stok"]);
	$gambarLama  = htmlspecialchars($ubahh["gambarLama"]);

	if ($_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}
	$semua    = "UPDATE barang SET
				 kode_barang= '$kode',
				 nama_barang='$nama',  
				 harga_barang = '$harga',
				 stok_barang= '$stok',
				 gambar_barang= '$gambar'
				 WHERE id_barang= $id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_karyawan($ubahh){
	global $conn;
	$id       = htmlspecialchars($ubahh["id"]);
	$id_kasir 	  = htmlspecialchars($ubahh["id_kasir"]);
	$nama	  = htmlspecialchars($ubahh["nama"]);
	$username	  = htmlspecialchars($ubahh["user"]);
	$password	  = htmlspecialchars($ubahh["pwd"]);

	$semua    = "UPDATE kasir SET
				 id_karyawan= '$id_kasir',
				 nama_karyawan='$nama',  
				 username= '$username',
				 password= '$password'
				 WHERE id= $id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_banner($ubahh){
	global $conn;
	$id       = htmlspecialchars($ubahh["id"]);
	$nama 	  = htmlspecialchars($ubahh["nama"]);
	$gambarLama  = htmlspecialchars($ubahh["gambarLamaa"]);

	if ($_FILES['gambar']['error'] === 4 ) {
		$gambarr = $gambarLama;
	}else{
		$gambarr = upload();
	}
	$semua    = "UPDATE banner SET
				 nama_banner='$nama',
				 gambar_banner= '$gambarr'
				 WHERE id = $id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}
function ubah_faq($ubahh){
	global $conn;
	$id       = htmlspecialchars($ubahh["id"]);
	$tanya 	  = htmlspecialchars($ubahh["tanya"]);
	$syarat 	  = htmlspecialchars($ubahh["syarat"]);
	$semua    = "UPDATE faq SET
				 pertanyaan='$tanya',
				 syarat= '$syarat'
				 WHERE id = $id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_galery($ubahh){
	global $conn;
	$id       = htmlspecialchars($ubahh["id"]);
	$nama 	  = htmlspecialchars($ubahh["nama"]);
	$gambarLama  = htmlspecialchars($ubahh["gambarLamaa"]);

	if ($_FILES['gambar']['error'] === 4) {
		$gambarr = $gambarLama;
	}else{
		$gambarr = upload_banner_ubah();
	}
	$semua    = "UPDATE galery SET
				 nama_galery='$nama',
				 gambar_galery= '$gambarr'
				 WHERE id = $id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}

function ubah_alamat($ubahh){
	global $conn;
	$id       = htmlspecialchars($ubahh["id"]);
	$nama 	  = htmlspecialchars($ubahh["nama"]);
	$kota 	  = htmlspecialchars($ubahh["kota"]);
	$daerah 	  = htmlspecialchars($ubahh["daerah"]);

	$semua    = "UPDATE alamat SET
				 nama_jalan='$nama',
				 nama_kota='$kota',
				 nama_provinsi= '$daerah'

				 WHERE id = $id
				";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn);
}
function hapus($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM barang and WHERE id_barang= $idd");
			mysqli_affected_rows($conn);
}
function hapus_karyawan($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM kasir WHERE id= $idd");
			mysqli_affected_rows($conn);
}

function hapus_admin($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM admin WHERE id_admin= $idd");
			mysqli_affected_rows($conn);
}
function hapus_alamat($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM alamat WHERE id = $idd");
			mysqli_affected_rows($conn);
}
function hapus_banner($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM banner WHERE id = $idd");
			mysqli_affected_rows($conn);
}
function hapus_galery($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM galery WHERE id = $idd");
			mysqli_affected_rows($conn);
}

function hapus_faq($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM faq WHERE id = $idd");
			mysqli_affected_rows($conn);
}

function hapus_kategori($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM kategori WHERE id = $idd");
			mysqli_affected_rows($conn);
}
function cari($keyword){
	$query = "SELECT*FROM barang WHERE 
	           nama_b 
	           LIKE '%$keyword%'";
	return query($query);
}
function carip($keyword){
	$query = "SELECT*FROM populer WHERE 
	           nama_barang 
	           LIKE '%$keyword%'";
	return query($query);
}
function upload_video(){
	$namafile = $_FILES['video']['name'];
	$ukuranfile = $_FILES['video']['size'];
	$error = $_FILES['video']['error'];
	$tmpname = $_FILES['video']['tmp_name'];

	if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['mp4','3gpp'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  			   document.location.href='input_data.php';
  		      </script>";
	}

	if ($ukuranfile > 8000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  			   document.location.href='input_data.php';
  		      </script>";
	}
	move_uploaded_file($tmpname, '../../file/video/'.$namafile);
	return $namafile;

}
function upload(){
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['jpg','jpeg','png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  		      </script>";
  		      return false;
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  		      </script>";
  		      return false;
	}
	move_uploaded_file($tmpname, 'gambar/'.$namafile);
	return $namafile;

}


function upload_style(){
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('gambar harus png!');
  		      </script>";
  		      return false;
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  		      </script>";
  		      return false;
	}
	move_uploaded_file($tmpname, '../../file/img/'.$namafile);
	return $namafile;

}

function upload_profile(){
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['jpg','jpeg','png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  			   document.location.href='users.php';
  		      </script>";
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  			   document.location.href='users.php';
  		      </script>";
	}
	move_uploaded_file($tmpname, '../../file/img/'.$namafile);
	return $namafile;

}


function upload_banner(){
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['jpg','jpeg','png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  			   document.location.href='input_banner.php';
  		      </script>";
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  			   document.location.href='input_banner.php';
  		      </script>";
	}
	move_uploaded_file($tmpname, '../../file/img/'.$namafile);
	return $namafile;

}

function upload_banner_ubah(){
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['jpg','jpeg','png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  		      </script>";
  		      return false;
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  		      </script>";
  		      return false;
	}
	move_uploaded_file($tmpname, '../../file/img/'.$namafile);
	return $namafile;

}

function upload_galery(){
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['jpg','jpeg','png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  			   document.location.href='input_galery.php';
  		      </script>";
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  			   document.location.href='input_galery.php';
  		      </script>";
	}
	move_uploaded_file($tmpname, '../../file/img/'.$namafile);
	return $namafile;

}

function upload_price(){
	$namafile = $_FILES['gambar_price']['name'];
	$ukuranfile = $_FILES['gambar_price']['size'];
	$error = $_FILES['gambar_price']['error'];
	$tmpname = $_FILES['gambar_price']['tmp_name'];

		if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['jpg','jpeg','png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  			   document.location.href='input_data.php';
  		      </script>";
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  			   document.location.href='input_data.php';
  		      </script>";
	}
	move_uploaded_file($tmpname, '../../file/img/'.$namafile);
	return $namafile;

}


function upload_price_banner(){
	$namafile = $_FILES['gambar_price']['name'];
	$ukuranfile = $_FILES['gambar_price']['size'];
	$error = $_FILES['gambar_price']['error'];
	$tmpname = $_FILES['gambar_price']['tmp_name'];

		if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['jpg','jpeg','png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  			   document.location.href='input_banner.php';
  		      </script>";
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  			   document.location.href='input_banner.php';
  		      </script>";
	}
	move_uploaded_file($tmpname, '../../file/img/'.$namafile);
	return $namafile;

}


function upload_price_banner_ubah(){
	$namafile = $_FILES['gambar_price']['name'];
	$ukuranfile = $_FILES['gambar_price']['size'];
	$error = $_FILES['gambar_price']['error'];
	$tmpname = $_FILES['gambar_price']['tmp_name'];

		if ($error === 4) {
		echo "<script>alert('masukan gambar terlebih dahulu')</script>";
		return false;
	}
	$ekstensifileval = ['jpg','jpeg','png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));


	if (!in_array($ekstensifile, $ekstensifileval)){
		echo "<script> 
  			   alert('file yang anda bukan gambar!');
  		      </script>";
  		  return false;
	}

	if ($ukuranfile > 1000000) {
		echo "<script> 
  			   alert('file terlalu besar');
  		      </script>";
  		 return false;
	}
	move_uploaded_file($tmpname, '../../file/img/'.$namafile);
	return $namafile;

}

function populer($id){
global $conn;
	$semua    = "INSERT INTO populer SELECT *FROM barang WHERE id = $id
				 ";
    mysqli_query($conn,$semua);
    return mysqli_affected_rows($conn); 
}
function hapusp($idd){
		global $conn;
		mysqli_query($conn,"DELETE FROM populer WHERE id_b = $idd");
			mysqli_affected_rows($conn);
}


 ?>