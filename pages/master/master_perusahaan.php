<?php
	error_reporting(0);
 	session_start(); ?>
<form method="POST" action="action/master_perusahaan/insert.php">
	<!-- Example Tab -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						HALAMAN DATA MASTER PERUSAHAAN
						<small>Note : Halaman ini digunakan untuk memasukan identitas perusahaan yang telah diregistrasi</small>
					</h2>
				</div>
				<div class="body">
				   <!-- Nav tabs -->
				   <ul class="nav nav-tabs tab-nav-right" role="tablist">
				       <li role="presentation" class="active"><a href="#data_baru" data-toggle="tab">Data Baru</a></li>
				       <li role="presentation"><a href="#daftar_b3" data-toggle="tab">Daftar Perusahaan</a></li>
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
						       				<input type="text" class="form-control" name="id_perusahaan" disabled="">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Nama Perusahaan</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="nama_perusahaan">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Alamat</label>
						       			<div class="form-line">
						       				<textarea rows="4" class="form-control no-resize" name="alamat"></textarea>
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Nomor Telepon</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="nomor_telepon">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">NPWP (Nomor Pokok Wajib Pajak)</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="npwp">
						       			</div>
						       		</div>
						       	</div>
					       		<div class="col-sm-6">
						       		<div class="input-group">
						       			<label class="form-label">Bidang Usaha</label>
						       			<select class="form-control show-tick" data-live-search="true" name="bidang_usaha">
                                    		   <option value="">-- Silahkan Pilih --</option>
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
                                    			   <option value="">-- Silahkan Pilih --</option>
                                    			   <option value="Importir Distributor">Importir Distributor</option>
                                    			   <option value="Importir Produsen">Importir Produsen</option>
                                    			   <option value="Importir Produsen dan Distributor">Importir Produsen dan Distributor</option>
                                    			</select>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">API (Angka Pengenal Import)</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="api">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Nama PIC</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="nama_pic">
						       			</div>
						       		</div>
						       		<div class="input-group">
						       			<label class="form-label">Nomor Telepon PIC</label>
						       			<div class="form-line">
						       				<input type="text" class="form-control" name="nomor_telepon_pic">
						       			</div>
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
									<th>Nama Perusahaan</th>
									<th>Alamat</th>
									<th>Bidang Usaha</th>
									<th>Jenis Importir</th>
									<th>Nama PIC</th>
									<th>Telepon PIC</th>
									<th>Aksi</th>
								</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Nama Perusahaan</th>
										<th>Alamat</th>
										<th>Bidang Usaha</th>
										<th>Jenis Importir</th>
										<th>Nama PIC</th>
										<th>Telepon PIC</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								include "database/koneksi.php";
								$result = mysql_query("SELECT * FROM `master_perusahaan`");
								while ($list = mysql_fetch_array($result)) {
									echo "
									<tr>
										<td>".$list['nama_perusahaan']."</td>
										<td>".$list['alamat_perusahaan']."</td>
										<td>".$list['bidang_usaha']."</td>
										<td>".$list['jenis_importir']."</td>
										<td>".$list['nama_pic']."</td>
										<td>".$list['tlp_pic']."</td>
										<td><a class='btn btn-default' href='index.php?halaman=edit_perusahaan&id=".$list['id_perusahaan']."'>Ubah Data</a> <a class='btn btn-danger' href='action/master_perusahaan/delete.php?id_perusahaan=".$list['id_perusahaan']."' onClick='return warning()'>Hapus</a></td>
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