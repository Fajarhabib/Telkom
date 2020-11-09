<div class="container-fluid">
	<div class="row">
	<div id="content-wrapper" class="d-flex flex-column">
	<section class="content">
		<h4><strong>DETAIL DATA PELANGGAN</strong></h4>
		<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Nama Lengkap</th>
				<td><?php echo $detail->nama ?></td>
			</tr>

			<tr>
				<th>Nomor Internet</th>
				<td><?php echo $detail->inet ?></td>
			</tr>

			<tr>
				<th>Alamat</th>
				<td><?php echo $detail->alamat ?></td>
			</tr>

			<tr>
				<th>Contact Person</th>
				<td><?php echo $detail->cp ?></td>
			</tr>

	
		</table>
		</div>
		<a href="<?php echo base_url('custommer/custommer/index'); ?>" class="btn btn-primary">Kembali</a>
	</section>
</div>	
	</div>
</div>