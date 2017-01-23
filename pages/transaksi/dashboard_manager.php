<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    List Transaksi
                </h2>
            </div>
            <div class="body">
              <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>No Reg</th>
                      <th>Nama Perusahaan</th>
                      <th>Tangggal Surat</th>
                      <th>Aksi</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>No</th>
                      <th>No Reg</th>
                      <th>Nama Perusahaan</th>
                      <th>Tangggal Surat</th>
                      <th>Aksi</th>
                  </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  $nomer = 1;
                  $query_report = "select
                                  transaksi_registerb3.id_register as id_register,
                                  master_perusahaan.nama_perusahaan as nama_perusahaan,
                                  transaksi_registerb3.no_surat_regis as no_regis,
                                  transaksi_registerb3.ltr_dtstart as ltr_dtstart from
                                  transaksi_registerb3 left JOIN master_perusahaan
                                  on transaksi_registerb3.id_perusahaan=master_perusahaan.id_perusahaan";

                  $master_data_transaksi = mysql_query($query_report);
                  while ($list = mysql_fetch_array($master_data_transaksi)) {
                      echo "
                                <tr>
                                  <td>" . $nomer . "</td>
                                  <td>" . $list['no_regis'] . "</td>
                                  <td>" . $list['nama_perusahaan'] . "</td>
                                  <td>" . $list['ltr_dtstart'] . "</td>
                                  <td>
                                      <a class='btn btn-info' href='index.php?halaman=detailb3&id=".$list['id_register']."'>Lihat</a>
                                  </td>
                                </tr>
                                ";
                      # code...
                      $nomer++;
                  }

                  ?>
                  </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
