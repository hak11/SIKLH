<?php 
	session_start();
	include "../../database/koneksi.php";
	
	$id_perusahaan = $_POST['id_perusahaan'];
	$nama_perusahaan = $_POST['nama_perusahaan'];
	$alamat = $_POST['alamat'];
	$nomor_telepon = $_POST['nomor_telepon'];
	$npwp = $_POST['npwp'];
	$bidang_usaha = $_POST['bidang_usaha'];
	$jenis_importir = $_POST['jenis_importir'];
	$api = $_POST['api'];
	$nama_pic = $_POST['nama_pic'];
	$nomor_telepon_pic = $_POST['nomor_telepon_pic'];

	
		// validasi data
	if ($nama_perusahaan=="" || $alamat =="" || $nomor_telepon =="" || $npwp =="" || $bidang_usaha =="" || $jenis_importir =="" || $api =="" || $nama_pic =="" || $nomor_telepon_pic =="" ) {
		$_SESSION['kosong'] = 'kosong';
		header ('Location: ../../index.php?halaman=edit_perusahaan&id=$id_perusahaan');
		} 
	// input ke database
	else { 
		$insert = mysql_query("UPDATE `db_klhk`.`master_perusahaan` SET `nama_perusahaan` = '$nama_perusahaan', `alamat_perusahaan` = '$alamat', `telepon` = '$nomor_telepon', `npwp` = '$npwp', `api` = '$api', `nama_pic` = '$nama_pic', `tlp_pic` = '$nomor_telepon_pic', `bidang_usaha` = '$bidang_usaha', `jenis_importir` = '$jenis_importir' WHERE `master_perusahaan`.`id_perusahaan` = '2';");

		if ($insert) {
			$_SESSION['terupdate'] = 'terupdate';
			header ('Location: ../../index.php?halaman=master_perusahaan');
			# jika gagal / salah input...
		} else {
			$_SESSION['gagalupdate'] = 'gagalupdate';
			header ('Location: ../../index.php?halaman=master_perusahaan');
		}
	}
 ?>