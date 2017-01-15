<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$halaman = $_GET['halaman'];

	switch ($halaman) {
			case 'halaman_utama':
				include 'pages/halaman_utama.php';
				# code...
				break;
			
			case 'master_b3':
				include 'pages/master/master_b3.php';
				# code...
				break;
			
			case 'master_perusahaan':
				include 'pages/master/master_perusahaan.php';
				# code...
				break;

			case 'master_pelabuhan':
				include 'pages/master/master_pelabuhan.php';
				# code...
				break;	
			
			case 'master_negara':
				include 'pages/master/master_negara.php';
				# code...
				break;

			case 'master_user':
				include 'pages/master/master_user.php';
				# code...
				break;	
			
			case 'registrasi_b3':
				include 'pages/transaksi/registrasi_b3.php';
				# code...
				break;
			
			case 'edit_b3':
				include 'pages/master/edit_b3.php';
				# code...
				break;
			
			case 'edit_negara':
				include 'pages/master/edit_negara.php';
				# code...
				break;
			
			case 'edit_perusahaan':
				include 'pages/master/edit_perusahaan.php';
				# code...
				break;

			case 'edit_pelabuhan':
				include 'pages/master/edit_pelabuhan.php';
				# code...
				break;	

			case 'edit_user':
				include 'pages/master/edit_user.php';
				# code...
				break;	
			
			default:
				include 'pages/halaman_utama.php';
				# code...
				break;
		}	

 ?>