<?php
require "../../database/koneksi.php";
$id_register=$_GET['id'];
$queryDelete = "DELETE FROM
transaksi_registerb3 WHERE id_register = $id_register";

if(mysql_query($queryDelete)){
    $queryDeleteDtail = "DELETE FROM
register_details WHERE id_register = $id_register";
    if(mysql_query($queryDeleteDtail)){
        echo "<script type='text/javascript'>alert('Delete Data Berhasil');</script>";
        echo "<script type='text/javascript'>document.location.href = '../../index.php?halaman=registrasi_b3';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Terjadi Kesalahan Saat Delete');</script>";
    }
} else {
    echo "<script type='text/javascript'>alert('Terjadi Kesalahan Saat Delete');</script>";
}

?>