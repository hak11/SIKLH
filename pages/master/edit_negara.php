<?php
	error_reporting(0);
 	session_start(); 

 	$id_negara = $_GET['id'];

 	include "database/koneksi.php";
 	$result = mysql_query("SELECT * FROM `master_negara` WHERE `id_negara` = '$id_negara'");
 	$data = mysql_fetch_array($result);

 	?>
	<form method="POST" action="action/master_negara/update.php">
	<!-- Example Tab -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						HALAMAN UBAH DATA MASTER NEGARA
						<small>Note : Halaman ini digunakan untuk merubah data negara</small>
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
					        			<label class="form-label">ID Negara</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="id_negara" value="<?php echo $data['id_negara']; ?>" readonly="">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Kode Negara</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="kode_negara" value="<?php echo $data['kode_negara']; ?>">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nama Negara</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nama_negara" value="<?php echo $data['nama_negara']; ?>">
					        			</div>
					        		</div>
					        	</div>
					        	<div class="col-sm-12">
					        			<a class='btn btn-default' href='index.php?halaman=master_negara'>BATAL</a>
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