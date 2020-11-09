<div class="container-fluid">
	<div class="row">
		<div id="content-wrapper" class="d-flex flex-column">
	<section class="content">
		<?php foreach ($ont as $ont) {?>
		<form action="<?php echo base_url().'ont/ont/update'; ?>" method="post">
			<div class="form-group">
				<label>SN LAMA</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $ont->id ?>">
				<input type="text" name="snlama" class="form-control" value="<?php echo $ont->snlama ?>">
			</div>

			<div class="form-group">
				<label>SN BARU</label>
			
				<input type="text" name="snbaru" class="form-control" value="<?php echo $ont->snbaru ?>">
			</div>


			<div class="form-group">
				<label>TIKET</label>
			
				<input type="text" name="tiket" class="form-control" value="<?php echo $ont->tiket ?>">
			</div>


			<div class="form-grup">
                <label>BA</label>
                <select class="form-control" name="ba">
                    <option>Done</option>
                    <option>NOK</option>
                </select>
             </div>

		
			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	<?php } ?>
	</section>

</div>
	</div>
</div>