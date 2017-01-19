<?php
$id_register=$_GET['id'];
if(!$id_register){
    header('Location: ../../index.php?halaman=registrasi_b3');
    exit();
}
$queryDetail1 = "SELECT
transaksi_registerb3.*,
master_perusahaan.*
FROM  transaksi_registerb3
left JOIN master_perusahaan
on transaksi_registerb3.id_perusahaan=master_perusahaan.id_perusahaan
where transaksi_registerb3.id_register=$id_register";

$detailQuery = mysql_fetch_array(mysql_query($queryDetail1));

$queryBarang = "SELECT
master_negara.nama_negara,
master_b3.name_b3,
register_details.*
FROM register_details
LEFT JOIN master_b3
on register_details.id_b3=master_b3.id
LEFT JOIN master_negara
on register_details.id_negara=master_negara.id_negara
where register_details.id_register=$id_register";
$detailBarang = mysql_query($queryBarang);
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Detail Transaksi ||
                    <a href="index.php?halaman=registrasi_b3" class="btn btn-info">Kembali</a>

                </h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h2 class="card-inside-title">Nama Perusahaan</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['nama_perusahaan'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">Telepon</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['telepon'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">Nama PIC</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['nama_pic'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h2 class="card-inside-title">No Telepon PIC</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['tlp_pic'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">No API</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['api'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">Alamat</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['alamat_perusahaan'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h2 class="card-inside-title">NPWP</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['npwp'] ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <h2 class="card-inside-title">Bidang Usaha</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['bidang_usaha'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">Jenis Importir</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['bidang_usaha'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h2 class="card-inside-title">Nomer Surat</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['no_surat_regis'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h2 class="card-inside-title">Tanggal Berlaku</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['no_surat_regis'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">Lama Pekerjaan</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['ltr_duration'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <h2 class="card-inside-title">Tanggal Mulai Proses</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['ltr_dtstart'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2 class="card-inside-title">Tanggal Surat selesai</h2>

                            <div class="form-line">
                                <?php echo $detailQuery['ltr_dtend'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive" style="overflow-x:auto;">
                        <hr/>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama B3</th>
                                <th>Nama Dagang</th>
                                <th>Jml Perimpor</th>
                                <th>Jml Impor/Thn</th>
                                <th>Negara Asal</th>
                                <th>Pelabuhan Bongkar</th>
                                <th>Nomor HS</th>
                                <th>Nomor Registrasi</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama B3</th>
                                <th>Nama Dagang</th>
                                <th>Jml Perimpor</th>
                                <th>Jml Impor/Thn</th>
                                <th>Negara Asal</th>
                                <th>Pelabuhan Bongkar</th>
                                <th>Nomor HS</th>
                                <th>Nomor Registrasi</th>
                            </tr>
                            </tfoot>
                            <tbody id="table-dagang">
                            <?php
                            $no =1;
                            while($dataDetails=mysql_fetch_array($detailBarang)){
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $dataDetails['name_b3'] ?></td>
                                <td style="max-width: 150px;"><?php echo $dataDetails['namaDagang'] ?></td>
                                <td><?php echo $dataDetails['jmlImport'] ?></td>
                                <td><?php echo $dataDetails['jmlImportTahunan'] ?></td>
                                <td><?php echo $dataDetails['nama_negara'] ?></td>
                                <td>
                                    <?php
                                    $pelabuhan = explode(',',$dataDetails['id_pelabuhan']);
                                    foreach($pelabuhan as $value){
                                        $queryPanggilPelabuhan = "select * from master_pelabuhan where id_pelabuhan='$value'";
                                        $detailPelabuhan = mysql_fetch_array(mysql_query($queryPanggilPelabuhan));
                                        echo strtoupper($detailPelabuhan['nama_pelabuhan']);
                                        echo "<hr />";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $dataDetails['nomerHS'] ?></td>
                                <td><?php echo $dataDetails['nomerReg'] ?></td>
                            </tr>
                            <?php
                                $no++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
