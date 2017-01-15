<?php 
	session_start();
	include "../../database/koneksi.php";

	$id = $_GET['id'];

	$delete = mysql_query("DELETE FROM `db_klhk`.`master_b3` WHERE `master_b3`.`id` = '$id' ");

	if ($delete) {
		$_SESSION['berhasilhapus'] = 'berhasilhapus';
		header ('Location: ../../index.php?halaman=master_b3');
		# code...
	} else {
		$_SESSION['gagalhapus'] = 'gagalhapus';
		header ('Location: ../../index.php?halaman=master_b3');
	}
 ?>