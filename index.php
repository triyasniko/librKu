<?php 
    session_start();
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    include 'koneksi.php';
    include 'function.php';

    if (!isset($_SESSION['petugas']) OR empty($_SESSION['petugas'])) {
        echo "<script>
                alert('Anda harus login dulu !!!');
                location='login.php';
              </script>";
        exit();
    }
    $id_petugas=$_SESSION['petugas']['id'];
        $ambil=$koneksi->query("SELECT*FROM tb_user WHERE id='$id_petugas' ");
        $pecah=$ambil->fetch_assoc();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>librKu</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Codedthemes">
    <meta name="keywords" content="flat ui, admin flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Mada:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- Style dataTables -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/dataTables/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/dataTables/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header" >
                <div class="navbar-wrapper">
                    <div class="navbar-logo" navbar-theme="theme4">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="#!">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                            </ul>

                            <ul class="nav-right">
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="assets/images/user.png" alt="User-Profile-Image">

                                        <span><?php echo $pecah['nama']; ?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="logout.php">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" >
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="<?php if(!$_GET['page']){ echo 'pcoded-trigger active'; } ?>">
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="ti-desktop"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="<?php if($_GET['page']=='anggota'){ echo 'pcoded-trigger active'; } ?>">
                                    <a href="?page=anggota">
                                        <span class="pcoded-micon"><i class="ti-user"></i></span>
                                        <span class="pcoded-mtext">Data Anggota</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="<?php if($_GET['page']=='buku'){ echo 'pcoded-trigger active'; } ?>">
                                    <a href="?page=buku">
                                        <span class="pcoded-micon"><i class="ti-agenda"></i></span>
                                        <span class="pcoded-mtext">Data Buku</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="<?php if($_GET['page']=='transaksi'){ echo 'pcoded-trigger active'; } ?> ">
                                    <a href="?page=transaksi">
                                        <span class="pcoded-micon"><i class="ti-wallet"></i></span>
                                        <span class="pcoded-mtext">Transaksi</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <?php 
                                        $page=$_GET['page'];
                                        $aksi=$_GET['aksi'];

                                        if ($page=="anggota") {
                                            if ($aksi=="") {
                                                include 'page/anggota/anggota.php';
                                            }elseif ($aksi=="tambah") {
                                                include 'page/anggota/tambah.php';
                                            }elseif ($aksi=="ubah") {
                                                include 'page/anggota/ubah.php';
                                            }elseif ($aksi=="hapus"){
                                                include 'page/anggota/hapus.php';
                                            }
                                        }elseif ($page=="buku") {
                                            if ($aksi=="") {
                                                include 'page/buku/buku.php';
                                            }elseif ($aksi=="tambah") {
                                                include 'page/buku/tambah.php';
                                            }elseif ($aksi=="ubah") {
                                                include 'page/buku/ubah.php';
                                            }elseif ($aksi=="hapus"){
                                                include 'page/buku/hapus.php';
                                            }
                                        }elseif ($page=="transaksi"){
                                            if ($aksi=="") {
                                                include 'page/transaksi/transaksi.php';
                                            }elseif ($aksi=="tambah"){
                                                include 'page/transaksi/tambah.php';
                                            }elseif ($aksi=="kembali") {
                                                include 'page/transaksi/kembali.php';
                                            }elseif ($aksi=="perpanjang"){
                                                include 'page/transaksi/perpanjang.php';
                                            }
                                        }elseif ($page==""){
                                            include 'home.php';
                                        }

                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/tether/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- dataTables -->
    <script type="text/javascript" src="assets/plugins/dataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/plugins/dataTables/js/dataTables.bootstrap4.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/plugins/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/plugins/modernizr/feature-detects/css-scrollbars.js"></script>

    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        $(document).ready(function () {
			$('#dataTable').dataTable();
		});   
    </script>
</body>

</html>