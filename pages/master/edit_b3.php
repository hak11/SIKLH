<?php
	error_reporting(0);
 	session_start(); 

 	$id = $_GET['id'];

 	include "database/koneksi.php";
 	$result = mysql_query("SELECT * FROM `master_b3` WHERE `id` = '$id'");
 	$data = mysql_fetch_array($result);

 	?>
<form method="POST" action="action/master_b3/update.php">
	<!-- Example Tab -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						<b>UBAH DATA MASTER B3</b>
						<small>Note : Halaman ini digunakan untuk mengubah data B3 (Bahan Berbahaya dan Beracun) yang terlampir dalam Peraturan Pemerintah Nomor 74 tahun 2001</small>
					</h2>
				</div>
				<div class="body">
				    <!-- Nav tabs -->
				    <ul class="nav nav-tabs tab-nav-right" role="tablist">
				        <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab"><b>Ubah Data</b></a></li>
				    </ul>
	
				    <!-- Tab panes -->
				    <div class="tab-content">
				        <div role="tabpanel" class="tab-pane fade in active" id="data_baru">
				        	<div class="row clearfix"><?php include "alert/alert.php";?>
					        	<div class="col-sm-6">
					        		<div class="input-group">
					        			<label class="form-label">ID B3</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="id_b3" value="<?php echo $data['id']; ?>" readonly="">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nomor CAS</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nomor_cas" value="<?php echo $data['cas_number']; ?>">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nama B3</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nama_b3" value="<?php echo $data['name_b3']; ?>">
					        			</div>
					        		</div>
					        	</div>
					        	<div class="col-sm-12">
					        			<a class='btn btn-default' href='index.php?halaman=master_b3'>BATAL</a>
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
</form>