<?php
	error_reporting(0);
 session_start(); ?>
	<form method="POST" action="action/master_user/insert.php">
	<!-- Example Tab -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						HALAMAN DATA MASTER USER
						<small>Note : Halaman ini digunakan untuk memasukan data user (pengguna) dari aplikasi ini.</small>
					</h2>
				</div>
				<div class="body">
				    <!-- Nav tabs -->
				    <ul class="nav nav-tabs tab-nav-right" role="tablist">
				        <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab">Data Baru</a></li>
				        <li role="presentation"><a href="#daftar_b3" data-toggle="tab">Daftar User</a></li>
				    </ul>

				    <!-- Tab panes -->
				    <div class="tab-content">
				        <div role="tabpanel" class="tab-pane fade in active" id="data_baru">
				        	<div class="row clearfix"><?php include "alert/alert.php";?>
					        	<div class="col-sm-6">
					        		<div class="input-group">
					        			<label class="form-label">ID User</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="id_user" disabled="">
					        			</div>
					        		</div>
					        		<div class="input-group">
						       			<label class="form-label">Level User</label>
						       			<select class="form-control show-tick" data-live-search="true" name="level_user">
                                    			   <option value="">-- Silahkan Pilih --</option>
                                    			   <option value="Manager">Manager</option>
                                    			   <option value="Staff">Staff</option>
                                    			</select>
						       		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nama Lengkap</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nama_lengkap">
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
								 	<th>ID User</th>
									<th>Level User</th>
									<th>Nama Lengkap</th>
									<th>Aksi</th>
								 </tr>
								</thead>
								<tfoot>
									<tr>
									<th>ID User</th>
									<th>Level User</th>
									<th>Nama Lengkap</th>
									<th>Aksi</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								include "database/koneksi.php";
								$result = mysql_query("SELECT * FROM `master_user`");
								while ($list = mysql_fetch_array($result)) {
									echo "
									<tr>
										<td>".$list['id_user']."</td>
										<td>".$list['level_user']."</td>
										<td>".$list['nama_lengkap']."</td>
										<td><a class='btn btn-default' href='index.php?halaman=edit_user&id=".$list['id_user']."'>Ubah Data</a> atau <a class='btn btn-danger' href='action/master_user/delete.php?id_user=".$list['id_user']."' onClick='return warning()'>Hapus</a></td>
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