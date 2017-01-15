<?php
	error_reporting(0);
 	session_start(); 

 	$id = $_GET['id_pelabuhan'];

 	include "database/koneksi.php";
 	$result = mysql_query("SELECT * FROM `master_pelabuhan` WHERE `id_pelabuhan` = '$id'");
 	$data = mysql_fetch_array($result);

 	?>
<form method="POST" action="action/master_pelabuhan/update.php">
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
				        <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab"><b>Ubah Data</b></a></li>
				    </ul>
	
				    <!-- Tab panes -->
				    <div class="tab-content">
				        <div role="tabpanel" class="tab-pane fade in active" id="data_baru">
				        	<div class="row clearfix"><?php include "alert/alert.php";?>
					        	<div class="col-sm-6">
					        		<div class="input-group">
					        			<label class="form-label">ID Pelabuhan</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="id_pelabuhan" value="<?php echo $data['id_pelabuhan']; ?>" readonly="">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Kode Pelabuhan</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="kode_pelabuhan" value="<?php echo $data['kode_pelabuhan']; ?>">
					        			</div>
					        		</div>
					        		<div class="input-group">
					        			<label class="form-label">Nama Pelabuhan</label>
					        			<div class="form-line">
					        				<input type="text" class="form-control" name="nama_pelabuhan" value="<?php echo $data['nama_pelabuhan']; ?>">
					        			</div>
					        		</div>
					        	</div>
					        	<div class="col-sm-12">
					        			<a class='btn btn-default' href='index.php?halaman=master_pelabuhan'>BATAL</a>
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