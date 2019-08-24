<?php 
	$nim=$_GET['id'];
	$sql=$koneksi->query("DELETE FROM tb_anggota WHERE nim='$nim' ");
	if ($sql) {
	?>
	<script type="text/javascript">
		alert("Data berhasil dihapus");
		location='index.php?page=anggota';
	</script>
	<?php
	}

 ?>