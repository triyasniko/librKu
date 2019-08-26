<div class="page-header">
    <div class="page-header-title">
        <h4>Data Anggota</h4>
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
    <a href="?page=anggota&aksi=tambah" class="btn btn-primary btn-sm text-left"><i class="ti-plus"></i>Tambah Data</a>
    <a href="./laporan/laporan_anggota_excel.php" target="blank" class="btn btn-success text-right btn-sm"><i class="ti-book"> Export To Excel</i></a>
    <a href="./laporan/laporan_anggota_pdf.php" target="blank" class="btn btn-default text-right btn-sm"><i class="ti-printer"></i>Export to PDF</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-contact borderless-card">
                <div class="table-responsive p-4">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Program Studi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1;
                                $sql=$koneksi->query("SELECT*FROM tb_anggota");
                                while ($data=$sql->fetch_assoc()) {
                                    $jk=($data['jk']==l)?"Laki-Laki":"Perempuan";

                             ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nim']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['tempat_lahir']; ?></td>
                                <td><?php echo $data['tgl_lahir']; ?></td>
                                <td class="text-center"><?php echo $jk; ?></td>
                                <td><?php echo $data['prodi']; ?></td>
                                <td>
                                    <a href="?page=anggota&aksi=ubah&id=<?php echo $data['nim']; ?>" class="btn btn-warning btn-sm">
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
