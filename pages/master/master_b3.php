<?php
	error_reporting(0);
 session_start(); ?>
<form method="POST" action="action/master_b3/insert.php">
	<!-- Example Tab -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						<b>HALAMAN DATA MASTER B3</b>
						<small>Note : Halaman ini digunakan untuk memasukan data B3 (Bahan Berbahaya dan Beracun) yang terlampir dalam Peraturan Pemerintah Nomor 74 tahun 2001</small>
					</h2>
				</div>
				<div class="body">
				    <!-- Nav tabs -->
				    <ul class="nav nav-tabs tab-nav-right" role="tablist">
				        <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab"><b>Data Baru</b></a></li>
				        <li role="presentation"><a href="#daftar_b3" data-toggle="tab"><b>Daftar B3</b></a></li>
				    </ul>
	
				    <!-- Tab panes -->
				    <div class="tab-content">
				        <div role="tabpanel" class="tab-pane fade in active" id="data_baru">
				        	<div class="row clearfix"><?php include "alert/alert.php";?>
					        	<div class="col-sm-6">
					        		<div class="input-group">
					        			<label class="form-label">ID B3</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="id_b3" disabled="">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nomor CAS</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nomor_cas">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nama B3</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nama_b3">
					        			</div>
					        		</div>
					        	</div>
					        	<div class="col-sm-12">
					        			<button type="reset" class="btn btn-default waves-effect">RESET</button>
										<button type="submit" class="btn btn-primary waves-effect">SUBMIT</button>
					        	</div>
					        </div>
				        </div>
				        <div role="tabpanel" class="tab-pane fade" id="daftar_b3">
				        	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">	
								<thead>
								 <tr>
								 	<th>ID</th>
									<th>Nomor CAS</th>
									<th>Nama B3</th>
									<th>Aksi</th>
								 </tr>
								</thead>
								<tfoot>
									<tr>
								 		<th>ID</th>
										<th>CAS Number</th>
										<th>Name B3</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								include "database/koneksi.php";
								$result = mysql_query("SELECT * FROM `master_b3`");
								while ($list = mysql_fetch_array($result)) {
									echo "
									<tr>
										<td>".$list['id']."</td>
										<td>".$list['cas_number']."</td>
										<td>".$list['name_b3']."</td>
										<td><a class='btn btn-default' href='index.php?halaman=edit_b3&id=".$list['id']."'>Ubah Data</a> atau <a class='btn btn-danger' href='action/master_b3/delete.php?id=".$list['id']."' onClick='return warning()'>Hapus</a></td>
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