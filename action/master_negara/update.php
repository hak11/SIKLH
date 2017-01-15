<?php 
	session_start();
	include "../../database/koneksi.php";

	$id_negara = $_POST['id_negara'];
	$kode_negara = $_POST['kode_negara'];
	$nama_negara = $_POST['nama_negara'];

	// validasi ketika data kosong
	if ($kode_negara=="" || $nama_negara =="") {
		$_SESSION['kosong'] = 'kosong';
		header ('Location: ../../index.php?halaman=edit_negara');
		# code...
	} else {
		$insert = mysql_query("UPDATE `db_klhk`.`master_negara` SET `kode_negara` = '$kode_negara', `nama_negara` = '$nama_negara' WHERE `master_negara`.`id_negara` = '$id_negara';");
		if ($insert) {
			$_SESSION['terupdate'] = 'terupdate';
			header ('Location: ../../index.php?halaman=master_negara');
			# code...
		} else {
			$_SESSION['gagalupdate'] = 'gagalupdate';
			header ('Location: ../../index.php?halaman=master_negara');
		}
	}
 ?>