<?php 
	session_start();
	include "../../database/koneksi.php";

	$kode_negara = $_POST['kode_negara'];
	$nama_negara = $_POST['nama_negara'];

	// validasi ketika data kosong
	if ($kode_negara=="" || $nama_negara =="") {
		$_SESSION['kosong'] = 'kosong';
		header ('Location: ../../index.php?halaman=master_negara');
		# code...
	} else {
		$insert = mysql_query("INSERT INTO `db_klhk`.`master_negara` (`id_negara` ,`kode_negara` ,`nama_negara`) VALUES (NULL , '$kode_negara', '$nama_negara')");
		if ($insert) {
			$_SESSION['berhasil'] = 'berhasil';
			header ('Location: ../../index.php?halaman=master_negara');
			# code...
		} else {
			$_SESSION['gagal'] = 'gagal';
			header ('Location: ../../index.php?halaman=master_negara');
		}
	}
 ?>