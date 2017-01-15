<?php 
	session_start();
	include "../../database/koneksi.php";
	$cari = mysql_query("select max(id_user) as kode from master_user");
	$tcari = mysql_fetch_array($cari);
	$kode = substr($tcari['kode'], 1,4);
	$tambah = $kode+1;
		if ($tambah<10) {
			$id_user="P000".$tambah;
		}elseif ($tambah<100) {
			$id_user = "P00".$tambah;
		}else{
			$id_user = "P0".$tambah;
		}

	$level_user = $_POST['level_user'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$password = (md5('akunbaru'));

	// validasi ketika data kosong
	if ($level_user=="" || $nama_lengkap ==""|| $password =="") {
		$_SESSION['kosong'] = 'kosong';
		header ('Location: ../../index.php?halaman=master_user');
		# code...
	} else {
		$insert = mysql_query("INSERT INTO `db_klhk`.`master_user` (`id_user` , `level_user` , `nama_lengkap` , `password`) VALUES 
			('$id_user', '$level_user', '$nama_lengkap', '$password')");
		if ($insert) {
			$_SESSION['berhasil'] = 'berhasil';
			header ('Location: ../../index.php?halaman=master_user');
			# code...
		} else {
			$_SESSION['gagal'] = 'gagal';
			header ('Location: ../../index.php?halaman=master_user');
		}
	}
 ?>