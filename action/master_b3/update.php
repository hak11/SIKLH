<?php 
	session_start();
	include "../../database/koneksi.php";

	$id = $_POST['id_b3'];
	$nomor_cas = $_POST['nomor_cas'];
	$nama_b3 = $_POST['nama_b3'];

	// validasi ketika data kosong
	if ($nomor_cas=="" || $nama_b3 =="") {
		$_SESSION['kosong'] = 'kosong';
		header ('Location: ../../index.php?halaman=edit_b3');
		# code...
	} else {
		$update = mysql_query("UPDATE `db_klhk`.`master_b3` SET `cas_number` = '$nomor_cas', `name_b3` = '$nama_b3' WHERE `master_b3`.`id` = '$id';");
		if ($update) {
			$_SESSION['terupdate'] = 'terupdate';
			header ('Location: ../../index.php?halaman=master_b3');
			# code...
		} else {
			$_SESSION['gagalupdate'] = 'gagalupdate';
			header ('Location: ../../index.php?halaman=master_b3');
		}
	}
 ?>