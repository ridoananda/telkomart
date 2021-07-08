<?php 
require 'fungsi.php';

$toko = query("SELECT*FROM count_product");

  if (isset($_POST["submit"])){
    if (ubah_count($_POST) >= 0) {
      echo "<script>alert('data berhasil diubah'); document.location.href = 'dashboard.php';</script> ";
    } elseif(ubah_toko($_POST) <= 0 ) {
      echo "<script>alert('data tidak berhasil ditambahkan'); document.location.href = 'dashboard.php';</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Webluzz
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

<body class="user-profile">
<?php 
   session_start();
  if (!isset($_SESSION['username'])){
  header("Location:login.php");
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

          <li class="active">
            <a href="./count_product.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Count Product</p>
            </a>
          </li>

           <li >
            <a href="./jam_kerja.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Jam Kerja</p>
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

          <li>
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
            <a href="./input_kategori.php">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Add category</p>
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
            <a class="navbar-brand" href="#pablo">Count Produk</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
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
          <div class="col-md-8">
            <div class="card">
              <?php foreach($toko as $toko1): ?>
              <div class="card-header">
                <h5 class="title">Count Produk
              </div>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 <input type="hidden" name="id"  value="<?=$toko1["id"]?>">
                 <input type="hidden" name="gambarLama" value="<?=$toko1["logo_toko"]?>">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label style="width: 300px;">Jumlah Complete Projects</label>
                        <input style="width: 300px;" type="text" class="form-control" placeholder="jumlah projects" 
                        name="projects"  value="<?= $toko1['projects']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label style="width: 300px;">Jumlah Happy Client :</label>
                        <input style="width: 300px;" type="text" class="form-control" placeholder="jumlah client" name="client" value="<?= $toko1['client']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label style="width: 300px;">Jumlah Product created :</label>
                        <input style="width: 300px;" type="text" class="form-control" placeholder="jumlah created" 
                        name="created"  value="<?= $toko1['created']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label style="width: 300px;">Jumlah Customer served :</label>
                        <input style="width: 300px;" type="text" class="form-control" placeholder="jumlah customer" 
                        name="customer"  value="<?= $toko1['customer']; ?>">
                      </div>
                    </div>
                  </div>

                  </div>
                  </div>
                  <br>
                  <input style="background-color:#e32a00; color: black; font-weight: bold; font-size: 15px; " type="submit" class="form-control" placeholder="Home Address" name="submit" value="simpan">
                </form>
              <?php endforeach; ?>
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
            </script>, Copyright by <a href="#">WEBLUZZ</a>
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