<div class="container-fluid">
	<div class="row">
		<div id="content-wrapper" class="d-flex flex-column">
	<section class="content">
		<?php foreach ($dc as $dc) {?>
		<form action="<?php echo base_url().'dc/dc/update'; ?>" method="post">
			<div class="form-group">
				<label>METER</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $dc->id ?>">
				<input type="text" name="meter" class="form-control" value="<?php echo $dc->meter ?>">
			</div>

			<div class="form-group">
				<label>TIKET</label>
			
				<input type="text" name="tiket" class="form-control" value="<?php echo $dc->tiket ?>">
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