<?php 
	session_start();
	include "../../database/koneksi.php";

	$id_user = $_POST['id_user'];
	$level_user = $_POST['level_user'];
	$nama_lengkap = $_POST['nama_lengkap'];

	// validasi ketika data kosong
	if ($level_user=="" || $nama_lengkap =="") {
		$_SESSION['kosong'] = 'kosong';
		header ('Location: ../../index.php?halaman=edit_user');
		# code...
	} else {
		$insert = mysql_query("UPDATE `db_klhk`.`master_user` SET `level_user` = '$level_user', `nama_lengkap` = '$nama_lengkap' WHERE `master_user`.`id_user` = '$id_user';");
		if ($insert) {
			$_SESSION['terupdate'] = 'terupdate';
			header ('Location: ../../index.php?halaman=master_user');
			# code...
		} else {
			$_SESSION['gagalupdate'] = 'gagalupdate';
			header ('Location: ../../index.php?halaman=master_user');
		}
	}
 ?>