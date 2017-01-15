<?php
	error_reporting(0);
 session_start(); ?>
<form method="POST" action="action/master_pelabuhan/insert.php">
	<!-- Example Tab -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						<b>HALAMAN DATA MASTER PELABUHAN</b>
						<small>Note : Halaman ini digunakan untuk memasukan pelabuhan yang terdaftar di Indonesia</small>
					</h2>
				</div>
				<div class="body">
				    <!-- Nav tabs -->
				    <ul class="nav nav-tabs tab-nav-right" role="tablist">
				        <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab"><b>Data Baru</b></a></li>
				        <li role="presentation"><a href="#daftar_pelabuhan" data-toggle="tab"><b>Daftar Pelabuhan</b></a></li>
				    </ul>
	
				    <!-- Tab panes -->
				    <div class="tab-content">
				        <div role="tabpanel" class="tab-pane fade in active" id="data_baru">
				        	<div class="row clearfix"><?php include "alert/alert.php";?>
					        	<div class="col-sm-6">
					        		<div class="input-group">
					        			<label class="form-label">ID Pelabuhan</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="id_pelabuhan" disabled="">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Kode Pelabuhan</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="kode_pelabuhan">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nama Pelabuhan</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nama_pelabuhan">
					        			</div>
					        		</div>
					        	</div>
					        	<div class="col-sm-12">
					        			<button type="reset" class="btn btn-default waves-effect">RESET</button>
										<button type="submit" class="btn btn-primary waves-effect">SUBMIT</button>
					        	</div>
					        </div>
				        </div>
				        <div role="tabpanel" class="tab-pane fade" id="daftar_pelabuhan">
				        	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">	
								<thead>
								 <tr>
								 	<th>ID PELABUHAN</th>
									<th>KODE PELABUHAN</th>
									<th>NAMA PELABUHAN</th>
									<th>Aksi</th>
								 </tr>
								</thead>
								<tfoot>
									<tr>
								 		<th>ID PELABUHAN</th>
										<th>KODE PELABUHAN</th>
										<th>NAMA PELABUHAN</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								include "database/koneksi.php";
								$result = mysql_query("SELECT * FROM `master_pelabuhan`");
								while ($list = mysql_fetch_array($result)) {
									echo "
									<tr>
										<td>".$list['id_pelabuhan']."</td>
										<td>".$list['kode_pelabuhan']."</td>
										<td>".$list['nama_pelabuhan']."</td>
										<td><a class='btn btn-default' href='index.php?halaman=edit_pelabuhan&id=".$list['id_pelabuhan']."'>Ubah Data</a> atau <a class='btn btn-danger' href='action/master_pelabuhan/delete.php?id=".$list['id']."' onClick='return warning()'>Hapus</a></td>
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
	</div>
	<!-- #END# Example Tab -->
</form>