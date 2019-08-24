<!-- Page header start -->
<div class="page-header">
	<div class="page-header-title">
		<h4>Data Buku</h4>
		
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
							<label class="col-sm-2 col-form-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="judul">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Pengarang</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="pengarang">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Penerbit</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="penerbit">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tahun Terbit</label>
							<div class="col-sm-10">
								<select class="form-control" name="tahun">
									<?php 
										$tahun=date("Y"); 
									 	for($i=$tahun-29;$i<=$tahun;$i++){
									 ?>
									 <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									 <?php
									 	}
									 ?>
									
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">ISBN</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" maxlength="25" name="isbn">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Jumlah Buku</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="jumlah">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2 col-form-label">Lokasi</div>
							<div class="col-sm-10">
								<select name="lokasi" class="form-control">
									
									<option value="rak1">Rak 1</option>
									<option value="rak2">Rak 2</option>
									<option value="rak3">Rak 3</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tanggal Input</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="tanggal">
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
		$judul=$_POST['judul'];
		$pengarang=$_POST['pengarang'];
		$penerbit=$_POST['penerbit'];
		$tahun=$_POST['tahun'];
		$isbn=$_POST['isbn'];
		$jumlah=$_POST['jumlah'];
		$lokasi=$_POST['lokasi'];
		$tanggal=$_POST['tanggal'];

		$sql=$koneksi->query("INSERT INTO tb_buku 
			(judul,pengarang,penerbit,tahun_terbit,isbn,jumlah_buku,lokasi,tgl_input) VALUES 
			('$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tanggal')") or die(mysqli_error($koneksi));
		if ($sql) {
			?>
			<script type="text/javascript">
				alert('Data berhasil ditambahkan');
				location='index.php?page=buku';
			</script>
			<?php
		}

	}
 ?>