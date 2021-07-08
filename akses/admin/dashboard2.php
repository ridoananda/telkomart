<?php 
require 'fungsi.php';
include 'patch.php';


$jumlah_product  = mysqli_query($conn,"SELECT * FROM data");
$count = mysqli_num_rows($jumlah_product);

$jumlah_banner  = mysqli_query($conn,"SELECT * FROM data_banner");
$count_banner = mysqli_num_rows($jumlah_banner);

$jumlah_galery  = mysqli_query($conn,"SELECT * FROM galery");
$count_galery = mysqli_num_rows($jumlah_galery);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
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
  header("Location:login.php");
}
  ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
         
          <li>
            <a href="./users.php">
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
           <li>
            <a href="./input_alamat.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Add Alamat</p>
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
            <a class="navbar-brand" href="#pablo">Dashboard</a>
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
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="profile_admin.php">Edit Profile</a>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
              <h5 class="card-category">Data Produk</h5>
                <h4 class="card-title">Jumlah Produk</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <div id="container" style="height: 150%"></div>
                </div>
              </div>
              <script src="chart/highcharts.js"></script>
<script src="chart/exporting.js"></script>
<script src="chart/export-data.js"></script>
<script src="chart/accessibility.js"></script>
<script type="text/javascript">
  Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Jumlah Seluruh Data Produk'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Produk'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: 'Produk'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Data Produk',
        data: [<?=$count; ?>]
    }]
});
</script>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Data Banner</h5>
                <h4 class="card-title">Jumlah Data Banner</h4>
              </div>

              <div class="card-body">
                <div class="chart-area">
                   <div id="container2" style="height: 150%"></div>
                </div>
              </div>
                  <script src="chart/highcharts.js"></script>
<script src="chart/exporting.js"></script>
<script src="chart/export-data.js"></script>
<script src="chart/accessibility.js"></script>
<script type="text/javascript">
  Highcharts.chart('container2', {
    chart: {
        type: 'area'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Jumlah Seluruh Data Produk'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Banner'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: 'Banner'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Data Banner',
        data: [<?=$count_banner; ?>]
    }]
});
</script>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Data Galery</h5>
                <h4 class="card-title">Jumlah Data Galery</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <div id="container3" style="height: 150%"></div>
                </div>
              </div>
                        <script src="chart/highcharts.js"></script>
<script src="chart/exporting.js"></script>
<script src="chart/export-data.js"></script>
<script src="chart/accessibility.js"></script>
<script type="text/javascript">
  Highcharts.chart('container3', {
    chart: {
        type: 'area'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Jumlah Seluruh Data Galery'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Galery'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: 'Galery'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Data Galery',
        data: [<?=$count_galery; ?>]
    }]
});
</script>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>