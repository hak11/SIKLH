<?php 
	session_start();
	include "../../database/koneksi.php";

	$id_perusahaan = $_GET['id_perusahaan'];

	$delete = mysql_query("DELETE FROM `db_klhk`.`master_perusahaan` WHERE `master_perusahaan`.`id_perusahaan` = '$id_perusahaan'");

	if ($delete) {
		$_SESSION['berhasilhapus'] = 'berhasilhapus';
		header ('Location: ../../index.php?halaman=master_perusahaan');
		# code...
	} else {
		$_SESSION['gagalhapus'] = 'gagalhapus';
		header ('Location: ../../index.php?halaman=master_perusahaan');
	}
 ?>