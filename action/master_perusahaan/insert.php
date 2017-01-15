<?php 
	session_start();
	include "../../database/koneksi.php";
	/*membuat id otomatis*/
	$cari = mysql_query("select max(id_perusahaan) as kode from master_perusahaan");
	$tcari = mysql_fetch_array($cari);
	$kode = substr($tcari['kode'], 1,4);
	$tambah = $kode+1;
		if ($tambah<10) {
			$id_perusahaan="T000".$tambah;
		}elseif ($tambah<100) {
			$id_perusahaan = "T00".$tambah;
		}else{
			$id_perusahaan = "T0".$tambah;
		}
	/* end dari membuat id otomatis */	
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
		header ('Location: ../../index.php?halaman=master_perusahaan');
		} 
	// input ke database
	else { 
		$insert = mysql_query("INSERT INTO `db_klhk`.`master_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `telepon`, `npwp`, `api`, `nama_pic`, `tlp_pic`, `bidang_usaha`, `jenis_importir`) VALUES ('$id_perusahaan', '$nama_perusahaan', '$alamat', '$nomor_telepon', '$npwp', '$api', '$nama_pic', '$nomor_telepon_pic', '$bidang_usaha', '$jenis_importir')");

		if ($insert) {
			$_SESSION['berhasil'] = 'berhasil';
			header ('Location: ../../index.php?halaman=master_perusahaan');
			# jika gagal / salah input...
		} else {
			$_SESSION['gagal'] = 'gagal';
			header ('Location: ../../index.php?halaman=master_perusahaan');
		}
	}
 ?>