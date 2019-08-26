<!-- Page header start -->
<div class="page-header">
	<div class="page-header-title">
		<h4>Data Anggota</h4>
		
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
							<label class="col-sm-2 col-form-label">NIM</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nim">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tempat Lahir</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="tempat_lahir">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tanggal Lahir </label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="tgl_lahir">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
							<div class="col-sm-10">
								<div class="form-check-inline">
							    	<label class="form-check-label">
							        	<input type="radio" class="form-check-input" name="jk" value="l">Laki-Laki
							    	</label>
							    </div>
							    <div class="form-check-inline">
							    	<label class="form-check-label">
							        	<input type="radio" class="form-check-input" name="jk" value="p">Perempuan
							    	</label>
							    </div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2 col-form-label">Program Studi</div>
							<div class="col-sm-10">
								<select name="prodi" class="form-control">
									<option value="-">--Silahkan Pilih--</option>
									<option value="Teknik Informatika">Teknik Informatika</option>
									<option value="Sistem Informasi">Sistem Informasi</option>
									<option value="Teknik Komputer">Teknik Komputer</option>
								</select>
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
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$tempat_lahir=$_POST['tempat_lahir'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$jk=$_POST['jk'];
		$prodi=$_POST['prodi'];

		$sql=$koneksi->query("INSERT INTO tb_anggota 
			(nim,nama,tempat_lahir,tgl_lahir,jk,prodi) VALUES 
			('$nim','$nama','$tempat_lahir','$tgl_lahir','$jk','$prodi')") or die(mysqli_error($koneksi));
		if ($sql) {
			?>
			<script type="text/javascript">
				alert('Data berhasil ditambahkan');
				location='index.php?page=anggota';
			</script>
			<?php
		}

	}
 ?>