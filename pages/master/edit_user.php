<?php
	error_reporting(0);
 	session_start(); 

 	$id_user = $_GET['id'];

 	include "database/koneksi.php";
 	$result = mysql_query("SELECT * FROM `master_user` WHERE `id_user` = '$id_user'");
 	$data = mysql_fetch_array($result);

 	?>
	<form method="POST" action="action/master_user/update.php">
	<!-- Example Tab -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						HALAMAN UBAH DATA MASTER USER
						<small>Note : Halaman ini digunakan untuk merubah data dari user</small>
					</h2>
				</div>
				<div class="body">
				    <!-- Nav tabs -->
				    <ul class="nav nav-tabs tab-nav-right" role="tablist">
				        <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab">Data Baru</a></li>
				    </ul>

				    <!-- Tab panes -->
				    <div class="tab-content">
				        <div role="tabpanel" class="tab-pane fade in active" id="data_baru">
				        	<div class="row clearfix"><?php include "alert/alert.php";?>
					        	<div class="col-sm-6">
					        		<div class="input-group">
					        			<label class="form-label">ID User</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="id_user" value="<?php echo $data['id_user']; ?>" readonly="">
					        			</div>
					        		</div>
					        		<div class="input-group">
						       			<label class="form-label">Level User</label>
						       			<select class="form-control show-tick" data-live-search="true" name="level_user">
                                    	   <option value="<?php echo $data['id_user']; ?>"><?php echo $data['level_user']; ?></option>
                                    	   <option value="">-- Silahkan Pilih --</option>
                                    	   <option value="Manager">Manager</option>
                                    	   <option value="Staff">Staff</option>
                                    	</select>
						       		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nama Lengkap</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>">
					        			</div>
					        		</div>
					        	</div>
					        	<div class="col-sm-12">
					        			<a class='btn btn-default' href='index.php?halaman=master_user'>BATAL</a>
										<button type="submit" class="btn btn-primary waves-effect">SUBMIT</button>
					        	</div>
					        </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
<!-- #END# Example Tab -->