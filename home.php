<div class="page-header">
    <div class="page-header-title">
        <h4>Dashboard</h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="#!">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
            </li>
        </ul>
    </div>
</div>
<div class="page-body">

    <div class="row">
        <!-- counter-card-1 start-->
        <div class="col-md-12 col-xl-4">
            <div class="card counter-card-1">
                <div class="card-block-big">
                    <div class="row">
                        <div class="col-6 counter-card-icon">
                            <i class="icofont icofont-chart-histogram"></i>
                        </div>
                        <div class="col-6  text-right">
                            <div class="counter-card-text">
                                <?php 
                                    $sql=$koneksi->query("SELECT*FROM tb_transaksi");
                                    $data_transaksi=$sql->num_rows;
                                 ?>
                                <h3><?php echo $data_transaksi; ?></h3>
                                <p>Transaksi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-card-1 end-->
        <!-- counter-card-2 start -->
        <div class="col-md-6 col-xl-4">
            <div class="card counter-card-2">
                <div class="card-block-big">
                    <div class="row">
                        <div class="col-6 counter-card-icon">
                            <i class="icofont icofont-book-alt"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="counter-card-text">
                                <?php 
                                    $sql=$koneksi->query("SELECT*FROM tb_buku");
                                    $data_buku=$sql->num_rows;
                                 ?>
                                <h3><?php echo $data_buku; ?></h3>
                                <p>Buku</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-card-2 end -->
        <!-- counter-card-3 start -->
        <div class="col-md-6 col-xl-4">
            <div class="card counter-card-3">
                <div class="card-block-big">
                    <div class="row">
                        <div class="col-6 counter-card-icon">
                            <i class="icofont icofont-id-card"></i>
                        </div>
                        <div class="col-6 text-right">
                            <div class="counter-card-text">
                                <?php 
                                    $sql=$koneksi->query("SELECT*FROM tb_anggota");
                                    $data_anggota=$sql->num_rows;
                                 ?>
                                <h3><?php echo $data_anggota; ?></h3>
                                <p>Anggota</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-card-3 end -->
    </div>
    <div class="row">
        <!--Follow block start-->
        <div class="col-md-12">
            <div class="card card-contact borderless-card">
                <div class="widget-profile-card-1">
                    <div class="bg-layer"></div>
                    <img class="profile-bg-img img-fluid" src="assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                    <button class="btn btn-default btn-outline-default btn-icon b-lft"><i class="icofont icofont-ui-user"></i></button>
                    <button class="btn btn-default btn-outline-default btn-icon b-rgt"><i class="icofont icofont-ui-message"></i></button>
                    <div class="middle-user">
                        <img class="img-fluid" src="assets/images/widget/user1.png" alt="Profile-user">
                    </div>
                </div>
                <div class="card-block text-center p-10">
                    <h5>Gregory Johnes</h5>
                    <p class="text-muted">Califonia, USA</p>
                </div>
            </div>
        </div>
        <!--Follow block Ends-->
    </div>
</div>