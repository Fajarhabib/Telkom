<div class="container-fluid">
	<div class="row">
		<div id="content-wrapper" class="d-flex flex-column">
	<section class="content">
		<h4><strong>DETAIL DATA TEKNISI</strong></h4>
		<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Nama Lengkap</th>
				<td><?php echo $detailTeknisi->nama ?></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td><?php echo $detailTeknisi->alamat ?></td>
			</tr>

			<tr>
				<th>Contact Person</th>
				<td><?php echo $detailTeknisi->cp ?></td>
			</tr>

			<tr>
				<th>NIK</th>
				<td><?php echo $detailTeknisi->nik ?></td>
			</tr>

			<tr>
				<td>
					<img src="<?php echo base_url() ;?>assets/foto/<?php echo $detailTeknisi->foto; ?>
					"width="90" height="110">
				</td>
				<td></td>
			</tr>
		</table>
		<a href="<?php echo base_url('teknisi/teknisi/index_teknisi'); ?>" class="btn btn-primary">Kembali</a>
		</div>
	</section>
</div>
	</div>
</div>