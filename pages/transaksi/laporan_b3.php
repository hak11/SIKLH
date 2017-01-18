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
    while ($list = mysql_fetch_array($master_data_transaksi)) {
        echo "
									<tr>
										<td>" . $nomer . "</td>
										<td>" . $list['no_regis'] . "</td>
										<td>" . $list['nama_perusahaan'] . "</td>
										<td>" . $list['ltr_dtstart'] . "</td>
										<td>
										    <a class='btn btn-default' href='index.php?halaman=detailb3&id=".$list['id_register']."'>Lihat</a>
										    <a class='btn btn-danger' href='pages/transaksi/delete_b3.php?id=".$list['id_register']."' onClick='return warning()'>Hapus</a>
										</td>
									</tr>
									";
        # code...
        $nomer++;
    }

    ?>
    </tbody>
</table>