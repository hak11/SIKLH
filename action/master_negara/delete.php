<?php 
	session_start();
	include "../../database/koneksi.php";

	$id_negara = $_GET['id_negara'];

	$delete = mysql_query("DELETE FROM `db_klhk`.`master_negara` WHERE `master_negara`.`id_negara` = '$id_negara'");

	if ($delete) {
		$_SESSION['berhasilhapus'] = 'berhasilhapus';
		header ('Location: ../../index.php?halaman=master_negara');
		# code...
	} else {
		$_SESSION['gagalhapus'] = 'gagalhapus';
		header ('Location: ../../index.php?halaman=master_negara');
	}
 ?>