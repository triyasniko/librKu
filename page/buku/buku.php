<div class="page-header">
    <div class="page-header-title">
        <h4>Data Buku</h4>
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
    <a href="?page=buku&aksi=tambah" class="btn btn-primary btn-sm"><i class="ti-plus"></i>Tambah Data</a>
	<div class="row">
        <div class="col-md-12">
            <div class="card card-contact borderless-card">
                <div class="table-responsive p-4">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>ISBN</th>
                                <th>Jumlah Buku</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1;
                                $sql=$koneksi->query("SELECT*FROM tb_buku");
                                while ($data=$sql->fetch_assoc()) {
                             ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?php echo $data['pengarang']; ?></td>
                                <td><?php echo $data['penerbit']; ?></td>
                                <td><?php echo $data['isbn']; ?></td>
                                <td><?php echo $data['jumlah_buku']; ?></td>
                                <td>
                                    <a href="?page=buku&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">
                                        <i class="ti-pencil-alt">&nbsp;Ubah</i>
                                    </a>
                                    <a onclick="return confirm('Yakin mau dihapus??')" href="?page=buku&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">
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
