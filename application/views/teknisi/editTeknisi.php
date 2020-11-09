<div class="container-fluid">
	<div class="row">
		<div id="content-wrapper" class="d-flex flex-column">
	<section class="content">
		<?php foreach ($teknisi as $tkn) {?>
		<form action="<?php echo base_url().'teknisi/teknisi/update_teknisi'; ?>" method="post">
			<div class="form-group">
				<label>Nama Teknisi</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $tkn->id ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $tkn->nama ?>">
			</div>


			<div class="form-group">
				<label>Alamat</label>
			
				<input type="text" name="alamat" class="form-control" value="<?php echo $tkn->alamat ?>">
			</div>


			<div class="form-group">
				<label>Contact Person</label>
			
				<input type="text" name="cp" class="form-control" value="<?php echo $tkn->cp ?>">
			</div>

			<div class="form-group">
				<label>NIK</label>
			
				<input type="text" name="nik" class="form-control" value="<?php echo $tkn->nik ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	<?php } ?>
	</section>

</div>
	</div>
</div>