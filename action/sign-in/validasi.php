<?php
session_start();

$nama_lengkap=$_POST['username'];
$password=md5($_POST['password']);

include "../../database/koneksi.php";
$query="SELECT * FROM `master_user` WHERE `nama_lengkap`='$nama_lengkap' AND `password`='$password'";
$result=mysql_query($query);

if($data=mysql_fetch_array($result)) 
	{
		$_SESSION['sign-in'] = true;
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
		$_SESSION['level_user'] = $data['level_user'];
		
		header('Location: ../../index.php');
	}
	else if($username=="" or $password="")
	{
		echo "Kosong";
	}
	else
	{
		echo "salah";
	}
 ?>