<?php 
	session_start();
	include "../../database/koneksi.php";

	$id_user = $_GET['id_user'];

	$delete = mysql_query("DELETE FROM `db_klhk`.`master_user` WHERE `master_user`.`id_user` = '$id_user'");

	if ($delete) {
		$_SESSION['berhasilhapus'] = 'berhasilhapus';
		header ('Location: ../../index.php?halaman=master_user');
		# code...
	} else {
		$_SESSION['gagalhapus'] = 'gagalhapus';
		header ('Location: ../../index.php?halaman=master_user');
	}
 ?>