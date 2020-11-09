<div class="container-fluid">
	<div class="row">
	<div id="content-wrapper" class="d-flex flex-column">
	<section class="content">
		<h4><strong>DETAIL DATA Drop Core</strong></h4>
		<div class="table-responsive">
		<table class="table">
			<tr>
				<th>METER</th>
				<td><?php echo $detail->meter ?></td>
			</tr>

			<tr>
				<th>TIKET</th>
				<td><?php echo $detail->tiket ?></td>
			</tr>

			<tr>
				<th>BA</th>
				<td><?php echo $detail->ba ?></td>
			</tr>
		</table>
		</div>
		<a href="<?php echo base_url('dc/dc/index'); ?>" class="btn btn-primary">Kembali</a>
	</section>
</div>	
	</div>
</div>