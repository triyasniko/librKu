<?php 
	$id=$_GET['id'];
	$sql=$koneksi->query("DELETE FROM tb_buku WHERE id='$id' ");
	if ($sql) {
	?>
	<script type="text/javascript">
		alert("Data berhasil dihapus");
		location='index.php?page=buku';
	</script>
	<?php
	}

 ?>