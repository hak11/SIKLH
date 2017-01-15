<?php if (isset($_SESSION['kosong'])): ?>
	<div class="col-sm-12 alert-dismissible" role="alert"">
		<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data tidak lengkap!
		</div>
	</div>
	<?php unset($_SESSION['kosong']) ?>
<?php endif ?>
<?php if (isset($_SESSION['berhasil'])): ?>
	<div class="col-sm-12 alert-dismissible" role="alert"">
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data berhasil ditambah!
		</div>
	</div>
	<?php unset($_SESSION['berhasil']) ?>
<?php endif ?>
<?php if (isset($_SESSION['gagal'])): ?>
	<div class="col-sm-12 alert-dismissible" role="alert"">
		<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data gagal ditambah!
		</div>
	</div>
	<?php unset($_SESSION['gagal']) ?>
<?php endif ?>
<?php if (isset($_SESSION['terupdate'])): ?>
	<div class="col-sm-12 alert-dismissible" role="alert"">
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data berhasil diubah!
		</div>
	</div>
	<?php unset($_SESSION['terupdate']) ?>
<?php endif ?>
<?php if (isset($_SESSION['gagalupdate'])): ?>
	<div class="col-sm-12 alert-dismissible" role="alert"">
		<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data gagal diubah!
		</div>
	</div>
	<?php unset($_SESSION['gagalupdate']) ?>
<?php endif ?>
<?php if (isset($_SESSION['gagalhapus'])): ?>
	<div class="col-sm-12 alert-dismissible" role="alert"">
		<div class="alert alert-warning alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data gagal dihapus!
		</div>
	</div>
	<?php unset($_SESSION['gagalhapus']) ?>
<?php endif ?>

<?php if (isset($_SESSION['berhasilhapus'])): ?>
	<div class="col-sm-12 alert-dismissible" role="alert"">
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data berhasil dihapus!
		</div>
	</div>
	<?php unset($_SESSION['berhasilhapus']) ?>
<?php endif ?>