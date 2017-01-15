<?php
	error_reporting(0);
 	session_start(); 

 	$id_perusahaan = $_GET['id'];

 	include "database/koneksi.php";
 	$result = mysql_query("SELECT * FROM `master_perusahaan` WHERE `id_perusahaan` = '$id_perusahaan'");
 	$data = mysql_fetch_array($result);
 	?>
<form method="POST" action="action/master_perusahaan/update.php">
	<!-- Example Tab -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						HALAMAN UBAH DATA MASTER PERUSAHAAN
						<small>Note : Halaman ini digunakan untuk mengubah identitas perusahaan yang telah diregistrasi</small>
					</h2>
				</div>
				<div class="body">
				   <!-- Nav tabs -->
				   <ul class="nav nav-tabs tab-nav-right" role="tablist">
				       <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab">Ubah Data</a></li>
				   </ul>

				   <!-- Tab panes -->
				   <div class="tab-content">
				       <div role="tabpanel" class="tab-pane fade in active" id="data_baru">
				       	<div class="row clearfix"><?php include "alert/alert.php";?>
					       	<div class="col-sm-12">
					       		<div class="col-sm-6">
						       		<div class="input-group">
						       			<label class="form-label">ID Perusahaan</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="id_perusahaan" value="<?php echo $data['id_perusahaan']; ?>" readonly="">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Nama Perusahaan</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $data['nama_perusahaan']; ?>">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Alamat</label>
						       			<div class="form-line">
						       				<textarea rows="4" class="form-control no-resize" name="alamat"><?php echo "".$data['alamat_perusahaan'].""; ?></textarea>
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Nomor Telepon</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="nomor_telepon" value="<?php echo $data['telepon']; ?>">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">NPWP (Nomor Pokok Wajib Pajak)</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="npwp" value="<?php echo $data['npwp']; ?>">
						       			</div>
						       		</div>
						       	</div>
					       		<div class="col-sm-6">
						       		<div class="input-group">
						       			<label class="form-label">Bidang Usaha</label>
						       			<select class="form-control show-tick" data-live-search="true" name="bidang_usaha">
                                    		   <option value="<?php echo $data['bidang_usaha']; ?>"><?php echo "".$data['bidang_usaha'].""; ?></option>
                                    		   <option value="Industri Kaca">Industri Kaca</option>
                                    		   <option value="Industri Plastik">Industri Plastik</option>
                                    		   <option value="Industri Kertas">Industri Kertas</option>
                                    		   <option value="Pedagangan">Pedagangan</option>
                                    		   <option value="Industri Lainnya">Industri Lainnya</option>
                                    		   <option value="Industri Logam">Industri Logam</option>
                                    		</select>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Jenis Importir</label>
						       			<select class="form-control show-tick" data-live-search="true" name="jenis_importir">
                                    			   <option value="<?php echo $data['jenis_importir']; ?>"><?php echo "".$data['jenis_importir'].""; ?></option>
                                    			   <option value="Importir Distributor">Importir Distributor</option>
                                    			   <option value="Importir Produsen">Importir Produsen</option>
                                    			   <option value="Importir Produsen dan Distributor">Importir Produsen dan Distributor</option>
                                    			</select>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">API (Angka Pengenal Import)</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="api" value="<?php echo $data['api']; ?>">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Nama PIC</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="nama_pic" value="<?php echo $data['nama_pic']; ?>">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Nomor Telepon PIC</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="nomor_telepon_pic" value="<?php echo $data['tlp_pic']; ?>">
						       			</div>
						       		</div>
						       	</div>
					       	</div>
					       	<div class="col-sm-12">
					       		<a class='btn btn-default' href='index.php?halaman=master_perusahaan'>BATAL</a>
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