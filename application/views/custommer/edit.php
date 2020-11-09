<div class="container-fluid">
	<div class="row">
		<div id="content-wrapper" class="d-flex flex-column">
	<section class="content">
		<?php foreach ($custommer as $cst) {?>
		<form action="<?php echo base_url().'custommer/custommer/update'; ?>" method="post">
			<div class="form-group">
				<label>Nama Pelanggan</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $cst->id ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $cst->nama ?>">
			</div>

			<div class="form-group">
				<label>Nomor Internet</label>
			
				<input type="text" name="inet" class="form-control" value="<?php echo $cst->inet ?>">
			</div>


			<div class="form-group">
				<label>Alamat</label>
			
				<input type="text" name="alamat" class="form-control" value="<?php echo $cst->alamat ?>">
			</div>


			<div class="form-group">
				<label>Contact Person</label>
			
				<input type="text" name="cp" class="form-control" value="<?php echo $cst->cp ?>">
			</div>


		
			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	<?php } ?>
	</section>

</div>
	</div>
</div>