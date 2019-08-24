<div class="page-header">
    <div class="page-header-title">
        <h4>Data Transaksi</h4>
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
    <a href="?page=transaksi&aksi=tambah" class="btn btn-primary btn-sm"><i class="ti-plus"></i>Tambah Data</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-contact borderless-card">
                <div class="table-responsive p-4">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Terlambat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1;
                                $sql=$koneksi->query("SELECT*FROM tb_transaksi WHERE status='pinjam' ");
                                while ($data=$sql->fetch_assoc()) {

                             ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?php echo $data['nim']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['tgl_pinjam']; ?></td>
                                <td><?php echo $data['tgl_kembali']; ?></td>
                                <td>
                                    <?php 
                                        $denda=500;
                                        $tgl_dateline2=$data['tgl_kembali'];
                                        $tgl_kembali=date('Y-m-d');

                                        $lambat=terlambat($tgl_dateline2,$tgl_kembali);
                                        $denda1=$lambat*$denda;

                                        if ($lambat>0) {
                                            echo "<font color='red'>$lambat"." hari<br>"."(Rp. $denda1 )</font>";
                                        }else{
                                            echo $lambat." hari";
                                        }
                                     ?>
                                </td>
                                <td><?php echo $data['status']; ?></td>
                                <td>
                                    <a href="?page=transaksi&aksi=ubah&id=<?php echo $data['nim']; ?>" class="btn btn-warning btn-sm">
                                        <i class="ti-pencil-alt">&nbsp;Ubah</i>
                                    </a>
                                    <a onclick="return confirm('Yakin mau dihapus??')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nim']; ?>" class="btn btn-danger btn-sm">
                                        <i class="ti-trash">&nbsp;Hapus</i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>  
            </div>              
        </div>
    </div>
</div>
