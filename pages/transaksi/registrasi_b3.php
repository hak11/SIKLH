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
                        <!--                       START DATA BARU -->
                        <div class="row clearfix"><?php include "alert/alert.php"; ?>
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <label class="form-label">Nama Perusahaan</label>
                                        <select class="form-control show-tick" data-live-search="true">
                                            <?php
                                            include "db/koneksi.php";
                                            $hasil = mysql_query("SELECT * FROM `master_perusahaan`");
                                            while ($data = mysql_fetch_array($hasil)) {
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

                                    Disini Tampilan tabel dari form isian B3
                                    Disini tombol add dan hapus
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
                                <div class="pull-right">
                                    <div class="btn btn-success waves-effect">Tambah Data</div>
                                </div>
                                <div class="body table-responsive">
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
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="table-dagang">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Metanol</td>
                                            <td>Metanol</td>
                                            <td>10</td>
                                            <td>120</td>
                                            <td>Singapore</td>
                                            <td>
                                                <div class="btn btn-danger waves-effect">Hapus</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="reset" class="btn btn-default waves-effect">RESET</button>
                                <button type="submit" class="btn btn-primary waves-effect">SUBMIT</button>
                            </div>
                        </div>
                        <!--                       END DATA BARU-->
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
                            include "database/koneksi.php";
                            $result = mysql_query("SELECT * FROM `master_perusahaan`");
                            while ($list = mysql_fetch_array($result)) {
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
