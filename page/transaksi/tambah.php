<?php 
$tgl_pinjam=date('d-m-Y');
$tujuh_hari=mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali=date("d-m-Y",$tujuh_hari);
?>
<!-- Page header start -->
<div class="page-header">
	<div class="page-header-title">
		<h4>Data Transaksi</h4>
		
	</div>
	<div class="page-header-breadcrumb">
		<ul class="breadcrumb-title">
			<li class="breadcrumb-item">
				<a href="index.html">
					<i class="icofont icofont-home"></i>
				</a>
			</li>
			<li class="breadcrumb-item"><a href="#!">Form Components</a>
			</li>
			<li class="breadcrumb-item"><a href="#!">Form Components</a>
			</li>
		</ul>
	</div>
</div>
<!-- Page header end -->
<!-- Page body start -->
<div class="page-body">
	<div class="row">
		<div class="col-sm-12">
			<!-- Basic Form Inputs card start -->
			<div class="card">
				<div class="card-header">
					<h5>Form input tambah data</h5>
					<span>Silahkan isi form dibawah ini</span>
					<div class="card-header-right">
						<i class="icofont icofont-rounded-down"></i>
						<i class="icofont icofont-refresh"></i>
						<i class="icofont icofont-close-circled"></i>
					</div>
				</div>
				<div class="card-block">
					<form method="POST">
						<div class="form-group row">
							<div class="col-sm-2 col-form-label">Judul Buku</div>
							<div class="col-sm-10">
								<select name="buku" class="form-control">
									<!-- <option value="-">--Silahkan Pilih--</option> -->
									<?php 
									$sql=$koneksi->query("SELECT*FROM tb_buku ORDER BY id") or die(mysqli_error($koneksi));
									while ($data=$sql->fetch_assoc()) {
										echo "<option value='$data[id].$data[judul]'>$data[judul]</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10">
								<select name="nama" class="form-control">
									<!-- <option value="-">--Silahkan Pilih--</option> -->
									<?php 
									$sql=$koneksi->query("SELECT*FROM tb_anggota ORDER BY nim") or die(mysqli_error($koneksi));
									while ($data=$sql->fetch_assoc()) {
										echo "<option value='$data[nim].$data[nama]'>$data[nim].$data[nama]</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tanggal Pinjam</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tgl_pinjam" value="<?php echo $tgl_pinjam; ?>" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tanggal Kembali </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tgl_kembali" value="<?php echo $kembali; ?>" readonly>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-12 text-right">
								<input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
								<input type="reset" class="btn btn-danger" name="batal" value="Batal">
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- Basic Form Inputs card end -->
		</div>
	</div>
</div>
<!-- Page body end -->
<?php 
	if (isset($_POST["simpan"])) {
		$tgl_pinjam=$_POST['tgl_pinjam'];
		$tgl_kembali=$_POST['tgl_kembali'];

		$buku=$_POST['buku'];
		$pecah_buku=explode(".", $buku);
		$id=$pecah_buku[0];
		$judul=$pecah_buku[1];

		$nama=$_POST['nama'];
		$pecah_nama=explode(".", $nama);
		$nim=$pecah_nama[0];
		$nama=$pecah_nama[1];

		$sql=$koneksi->query("SELECT*FROM tb_buku WHERE judul='$judul' ")or die(mysqli_error($koneksi));
		while ($data=$sql->fetch_assoc()) {
			$sisa=$_POST['jumlah_buku'];

			if ($sisa == 0) {
				?>
				<script type="text/javascript">
					alert("Stok buku habis Silahkan tunggu sampai dikembalikan");
					location='index.php?page=transaksi&aksi=tambah';
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert("buku bisa dipinjam");
				</script>
				<?php
			}
		}
	}
?>