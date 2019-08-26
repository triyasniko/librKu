<?php
$koneksi=new mysqli("localhost","root","","db_librKu");
require_once __DIR__ . '../../assets/plugins/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html.='
	<!DOCTYPE html>
	<html>
	<head>
		<title>Laporan Anggota</title>
		<style>
			h3{
				text-align:center;
			}
			table th{
				background-color:#cccccc;
			}
		</style>
	</head>
	<body>
		<h3>Laporan Data Anggota</h3>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
			</tr>';
			$no=1;
            $sql=$koneksi->query("SELECT*FROM tb_anggota");
            while ($data=$sql->fetch_assoc()) {
            $jk=($data['jk']=='l')?"Laki-Laki":"Perempuan";

            $html.='
            	<tr>
                    <td>'.$no++.'</td>
                    <td>'.$data['nim'].'</td>
                    <td>'.$data['nama'].'</td>
                    <td>'.$data['tempat_lahir'].'</td>
                    <td>'.$data['tgl_lahir'].'</td>
                    <td>'.$jk.'</td>
                    <td>'.$data['prodi'].'</td>
                </tr>
            ';
        	}
$html.='</table>
	</body>
	</html>

';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>