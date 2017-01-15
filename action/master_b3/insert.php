<?php 
	session_start();
	include "../../database/koneksi.php";

	$nomor_cas = $_POST['nomor_cas'];
	$nama_b3 = $_POST['nama_b3'];

	// validasi ketika data kosong
	if ($nomor_cas=="" || $nama_b3 =="") {
		$_SESSION['kosong'] = 'kosong';
		header ('Location: ../../index.php?halaman=master_b3');
		# code...
	} else {
		$insert = mysql_query("INSERT INTO `db_klhk`.`master_b3` (`id`, `cas_number`, `name_b3`) VALUES (NULL, '$nomor_cas', '$nama_b3')");
		if ($insert) {
			$_SESSION['berhasil'] = 'berhasil';
			header ('Location: ../../index.php?halaman=master_b3');
			# code...
		} else {
			$_SESSION['gagal'] = 'gagal';
			header ('Location: ../../index.php?halaman=master_b3');
		}
	}
 ?>