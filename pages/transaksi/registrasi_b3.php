<?php

//START PREPARE DATA

$master_data_transaksi = mysql_query("SELECT * FROM `master_perusahaan`");
$data_master_perusahaan = mysql_query("SELECT * FROM `master_perusahaan`");
$data_master_pelabuhan = mysql_query("SELECT * FROM `master_pelabuhan` LIMIT 5");
$data_master_negara = mysql_query("SELECT * FROM `master_negara`  LIMIT 5");
$data_master_b3 = mysql_query("SELECT id,name_b3 FROM `master_b3` LIMIT 5");
while($row=mysql_fetch_array($data_master_b3)){
    $master_b3[]=$row;
}

while($row=mysql_fetch_array($data_master_negara)){
    $master_negara[]=$row;
}

while($row=mysql_fetch_array($data_master_pelabuhan)){
    $master_pelabuhan[]=$row;
}
//END PREPARE DATA
?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    HALAMAN DATA TRANSAKSI
                    <small>Note : Halaman ini digunakan untuk memasukan data registrasi</small>
                </h2>
            </div>
            <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab">Data Baru</a></li>
                    <li role="presentation"><a href="#daftar_b3" data-toggle="tab">Daftar Registrasi</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="data_baru">
                        <form action="./pages/transaksi/tambahRegis.php" method="POST">
                        <!--                       START TAMBAH DATA BARU -->
                        <div class="row clearfix"><?php include "alert/alert.php"; ?>
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <label class="form-label">Nama Perusahaan</label>
                                        <select class="form-control show-tick" data-live-search="true">
                                            <?php
                                            while ($data = mysql_fetch_array($data_master_perusahaan)) {
                                                echo "
											<option value='" . $data['id_perusahaan'] . "'>" . $data['nama_perusahaan'] . "</option>";
                                                # code...
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <label class="form-label">Nomor Surat Registrasi</label>

                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_perusahaan">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <label class="form-label">Masa Berlaku Surat</label>

                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tanggal_berlaku"
                                                   id="tanggal_berlaku" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label class="form-label">Tanggal Mulai Proses (UPT)</label>

                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" id="ltr_dtstart"
                                                   name="ltr_dtstart">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <label class="form-label">Tanggal Surat Selesai</label>

                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" id="ltr_dtend"
                                                   name="ltr_dtend" onChange="hitung_durasi()">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <label class="form-label">Lama Proses (Hari)</label>

                                        <div class="form-line">
                                            <input type="text" class="form-control" name="ltr_duration"
                                                   id="ltr_duration" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="table-responsive" style="overflow-x:auto;">
                                    <hr/>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama B3</th>
                                            <th>Nama Dagang</th>
                                            <th>Jumlah Perimpor</th>
                                            <th>Jumlah Impor Pertahun</th>
                                            <th>Negara Asal</th>
                                            <th>Pelabuhan Bongkar</th>
                                            <th>Nomor HS</th>
                                            <th>Nomor Registrasi</th>
                                        </tr>
                                        </thead>
                                        <tbody id="table-dagang">
                                        <?php
                                        for($i=1; $i<=10; $i++ ){

                                            ?>
                                        <tr>
                                            <th scope="row"><?php echo $i ?></th>
                                            <td>
                                                <select name="namabe3[]" class="form-control" placeholder="Nama B3">
                                                    <option value="">Pilih B3</option>
                                                <?php
                                                foreach($master_b3 as $data){
                                                ?>
                                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['name_b3'] ?></option>
                                                <?php
                                                }
                                                ?>
                                                </select>
                                            </td>
                                            <td><input type="text" name="namaDagang[]"  class="form-control" placeholder="Nama Dagang"></td>
                                            <td><input type="text" name="jmlImport[]"  class="form-control" placeholder="Jml Import"></td>
                                            <td><input type="text" name="jmlImportTahunan[]"  class="form-control" placeholder="Jml/Thn"</td>
                                            <td>
                                                <select name="negara[]"  class="form-control" placeholder="Negara Asal">
                                                    <option value="">Negara</option>
                                                    <?php
                                                    foreach($master_negara as $data){
                                                        ?>
                                                        <option value="<?php echo $data['kode_negara'] ?>"><?php echo $data['nama_negara'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            <td>

                                                <select name="pelabuhan[]"  class="form-control" placeholder="Pelabuhan Bongkar">
                                                    <option value="">Pelabuhan</option>
                                                    <?php
                                                    foreach($master_pelabuhan as $data){
                                                        ?>
                                                        <option value="<?php echo $data['id_pelabuhan'] ?>"><?php echo $data['kode_pelabuhan'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            <td><input type="text" name="nomorHS[]"  class="form-control" placeholder="Nomor HS"></td>
                                            <td><input type="text" name="nomorReg[]"  class="form-control" placeholder="Nomor Register"></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="reset" class="btn btn-default waves-effect">RESET</button>
                                <button type="submit" class="btn btn-primary waves-effect">SUBMIT</button>
                            </div>
                        </div>
                        <!--                       END TAMBAH DATA BARU-->
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="daftar_b3">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Alamat</th>
                                <th>Bidang Usaha</th>
                                <th>Jenis Importir</th>
                                <th>Nama PIC</th>
                                <th>Telepon PIC</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Alamat</th>
                                <th>Bidang Usaha</th>
                                <th>Jenis Importir</th>
                                <th>Nama PIC</th>
                                <th>Telepon PIC</th>
                                <th>Aksi</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            while ($list = mysql_fetch_array($master_data_transaksi)) {
                                echo "
									<tr>
										<td>" . $list['nama_perusahaan'] . "</td>
										<td>" . $list['alamat_perusahaan'] . "</td>
										<td>" . $list['bidang_usaha'] . "</td>
										<td>" . $list['jenis_importir'] . "</td>
										<td>" . $list['nama_pic'] . "</td>
										<td>" . $list['tlp_pic'] . "</td>
										<td><a class='btn btn-default' href='index.php?halaman=edit_perusahaan&id=" . $list['id_perusahaan'] . "'>Ubah Data</a> <a class='btn btn-danger' href='action/master_perusahaan/delete.php?id_perusahaan=" . $list['id_perusahaan'] . "' onClick='return warning()'>Hapus</a></td>
									</tr>
									";
                                # code...
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function hide() {
            document.getElementById("ltr_dtstart").readOnly = true;
        }
        function hitung_durasi() {
            var a = ($("#ltr_dtstart").val());
            var splita = a.split("/");
            var gabunga = splita[2] + "/" + splita[1] + "/" + splita[0];

            var b = ($("#ltr_dtend").val());
            var splitb = b.split("/");
            var gabungb = splitb[2] + "/" + splitb[1] + "/" + splitb[0];


            var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
            var firstDate = new Date(gabunga);
            var secondDate = new Date(gabungb);
            var diffDays = Math.round(Math.round((secondDate.getTime() - firstDate.getTime()) / (oneDay)));
            if (diffDays >= 0) {
                $("#ltr_duration").val(diffDays);
                var tahun_berlaku = Number(splitb[2]);
                var tahun_berlaku1 = tahun_berlaku + 1;
                var tanggal_berlaku = splitb[0] + "/" + splitb[1] + "/" + tahun_berlaku1;
                $("#tanggal_berlaku").val(tanggal_berlaku);
            } else {
                $("#ltr_duration").val("Anda salah memasukan nilai");
            }


        }
    </script>
