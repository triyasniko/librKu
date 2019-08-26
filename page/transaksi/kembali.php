<?php 
	$id=$_GET['id'];
	$judul=$_GET['judul'];
	// echo $id.$judul;
	// exit();

	$sql=$koneksi->query("UPDATE tb_transaksi SET status='kembali' WHERE id='$id' ");
	$sql2=$koneksi->query("UPDATE tb_buku SET jumlah_buku=(jumlah_buku+1) WHERE judul='$judul' ");

	?>
	<script type="text/javascript">
		alert("Pengembalian buku berhasil");
		location='index.php?page=transaksi';
	</script>
	<?php

 ?>