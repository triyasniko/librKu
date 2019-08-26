<?php 
	session_start();
	$_SESSION=[];
	session_unset();
	session_destroy();
	echo "<script>
		alert('Logout success');
		location='login.php';
	</script>";

 ?>