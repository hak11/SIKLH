<?php
require "../../database/koneksi.php";
$id_perusahaan = $_POST['kode_perusahaan'];
$no_surat_regis = $_POST['no_surat_regis'];
$tanggal_berlaku = date("Y-m-d", strtotime($_POST['tanggal_berlaku']));
$ltr_dtstart = date("Y-m-d", strtotime($_POST['ltr_dtstart']));
$ltr_dtend = date("Y-m-d", strtotime($_POST['ltr_dtend']));
$ltr_duration = $_POST['ltr_duration'];
$created_at = date('Y-m-d');
$queryMain = "INSERT INTO transaksi_registerb3 (`id_perusahaan`,`no_surat_regis`,`tanggal_berlaku`,`ltr_dtstart`,`ltr_dtend`,`ltr_duration`,`created_at`)
              VALUES ('$id_perusahaan','$no_surat_regis','$tanggal_berlaku','$ltr_dtstart','$ltr_dtend','$ltr_duration','$created_at')";
if(mysql_query($queryMain)){
    $id_register=mysql_insert_id();
    if($id_register){
        $forParam = $_POST['namabe3'];
        $key = 0;
        foreach($forParam as $data ){
            if($data){
            $id_b3 = $_POST['namabe3'][$key];
            $namaDagang = $_POST['namaDagang'][$key];
            $jmlImport = $_POST['jmlImport'][$key];
            $jmlImportTahunan = $_POST['jmlImportTahunan'][$key];
            $id_negara = $_POST['negara'][$key];
            $id_pelabuhan = implode(',',$_POST['pelabuhan'][$key]);
            $nomorHS = $_POST['nomorHS'][$key];
            $nomorReg = $_POST['nomorReg'][$key];

            $queryDetails = "INSERT INTO register_details (`id_register`,`id_b3`,`namaDagang`,`jmlImport`,`jmlImportTahunan`,`id_negara`,
                              `id_pelabuhan`,`nomerHS`,`nomerReg`) VALUES ('$id_register','$id_b3','$namaDagang','$jmlImport','$jmlImportTahunan',
                              '$id_negara','$id_pelabuhan','$nomorHS','$nomorReg')";

            mysql_query($queryDetails);
            }
            $key++;
        }
        header('Location: ../../index.php?halaman=registrasi_b3');
    }
} else {
    echo "Terdapat Kesalahan";
    exit;
}

?>