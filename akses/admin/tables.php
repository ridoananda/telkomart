<?php 
require 'fungsi.php';
$data_produk = query("SELECT * FROM product");
$data_banner = query("SELECT * FROM banner");
$data_galery = query("SELECT * FROM galery");
$data_faq    = query("SELECT * FROM faq");
$data_kategori    = query("SELECT * FROM kategori");

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    WEBLUZZ
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<?php 
  session_start();
  if (!isset($_SESSION['username'])){
  header("Location:login.php?=belumlogin");
}
?>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
       
        <a href="#" class="simple-text logo-normal">
          WEBLUZZ
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./user.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Profile Toko</p>
            </a>
          </li>

           <li>
            <a href="./profile_admin.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Akun Admin</p>
            </a>
          </li>
          
           <li>
            <a href="./cs.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Customer Service</p>
            </a>
          </li>


           <li>
            <a href="./alamat.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Alamat Toko</p>
            </a>
          </li>


           <li>
            <a href="./navbar_input.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Navbar input</p>
            </a>
          </li>

          <li class="active ">
            <a href="./tables.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>

          <li>
            <a href="./input_data.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Add Product</p>
            </a>
          </li>
          <li>
            <a href="./input_banner.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Add Banner</p>
            </a>
          </li>
          <li>
            <a href="./input_galery.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Add Galery</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form action="search.php">
              <div class="input-group no-border">
                <input type="text" class="form-control" placeholder="Search..." name="q">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              
              

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="profile_admin.php">Edit Profile</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Product</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Aksi
                      </th>
                      <th>
                        Nama Produk
                      </th>
                      <th>
                        Deskripsi
                      </th>
                      <th >
                        Gambar Produk
                      </th>
                      <th >
                        Kategori
                      </th>
                    </thead>
                    <tbody>

                      <?php $i = 1; 
                      foreach ($data_produk as $product) : ?>
                      <tr>
                        <td>
                          <?= $i; ?>
                        </td>
                        <td>
                          <a href="ubah_data.php?id=<?=$product['id']; ?>">ubah</a>||<a href="hapus_data.php?id=<?=$product['id']; ?>">hapus</a>
                        </td>
                        <td>
                          <?= $product["nama_product"] ?>
                        </td>
                        <td>
                          <?= $product["deskripsi_product"] ?>
                        </td>
                        <td >
                          <img width="150" src="../../file/img/<?=$product["gambar_product"] ?>">
                        </td>

                        <td>
                          <?= $product["kategori_product"] ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title">Data banner</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        aksi
                      </th>
                      <th>
                          Nama banner
                      </th>
                      <th >
                        Gambar Banner
                      </th>
                    </thead>
                    <tbody>

                      <?php $i =1; 
                      foreach ($data_banner as $banner): ?>
                      <tr>
                        <td>
                          <?= $i; ?>
                        </td>
                        <td>
                          <a href="ubah_banner.php?id=<?=$banner['id']; ?>">ubah</a>||<a href="hapus_banner.php?id=<?=$banner['id']; ?>">hapus</a>
                        </td>
                        <td>
                         <?= $banner["nama_banner"]; ?>
                        </td>
                        <td >
                          <img width="150" src="../../file/img/<?= $banner["gambar_banner"]; ?>">
                        </td>
                      </tr>
                    <?php endforeach; ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Galery</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        aksi
                      </th>
                      <th>
                        Nama Galery
                      </th>
                      <th>
                        Gambar
                      </th>
                    </thead>
                    <tbody>

                      <?php $i = 1; 
                      foreach ($data_galery as $galery) : ?>
                      <tr>
                        <td>
                          <?= $i; ?>
                        </td>
                        <td>
                          <a href="ubah_galery.php?id=<?=$galery['id']; ?>">ubah</a>||<a href="hapus_galery.php?id=<?=$galery['id']; ?>">hapus</a>
                        </td>
                        <td>
                          <?= $galery["nama_galery"] ?>
                        </td>
                        <td >
                          <img width="150" src="../../file/img/<?=$galery["gambar_galery"] ?>">
                        </td>
                      </tr>
                    <?php endforeach; ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title">Data FAQ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        aksi
                      </th>
                      <th>
                          pertanyaan faq/syarat
                      </th>
                      <th>
                        Deskripsi syarat
                      </th>
                    </thead>
                    <tbody>

                      <?php $i =1; 
                      foreach ($data_faq as $faq): ?>
                      <tr>
                        <td>
                          <?= $i; ?>
                        </td>
                        <td>
                          <a href="ubah_faq.php?id=<?=$faq['id']; ?>">ubah</a>||<a href="hapus_faq.php?id=<?=$faq['id']; ?>">hapus</a>
                        </td>
                        <td>
                         <?= $faq["pertanyaan"]; ?>
                        </td>
                        <td>
                          <?= $faq["syarat"]; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Kategori</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        aksi
                      </th>
                      <th>
                        Nama Kategori
                      </th>
                      <th>
                        Gambar Kategori
                      </th>
                    </thead>
                    <tbody>

                      <?php $i = 1; 
                      foreach ($data_kategori as $kategori) : ?>
                      <tr>
                        <td>
                          <?= $i; ?>
                        </td>
                        <td>
                          <a href="ubah_kategori.php?id=<?=$kategori['id']; ?>">ubah</a>||<a href="hapus_kategori.php?id=<?=$kategori['id']; ?>">hapus</a>
                        </td>
                        <td>
                          <?= $kategori["nama_kategori"] ?>
                        </td>
                        <td >
                          <img width="150" src="../../file/img/<?=$kategori["gambar_kategori"] ?>">
                        </td>
                      </tr>
                    <?php endforeach; ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
       <footer class="footer">
        <div class=" container-fluid ">
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Copyright by <a href="#">We-Bluzz</a>
          </div>
        </div>
      </footer> 
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>