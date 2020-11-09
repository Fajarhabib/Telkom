<div class="container-fluid">
	<div class="row">
      
       <div id="content-wrapper" class="d-flex flex-column">
    
    <section class="content-header">
      <h4>
        Data Pelanggan
      </h4>
      
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Pelanggan</button>

        <div class="navbar-form navbar-right"> <?php echo form_open('custommer/custommer/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
        </div>
        <div class="table-responsive">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NO.INTERNET</th>
                <th>ALAMAT</th>
                <th>CP</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php 
             $no = 1;
             foreach ($custommer as $cst) :
             ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $cst->nama ?></td>
                <td><?php echo $cst->inet ?></td>
                <td><?php echo $cst->alamat ?></td>
                <td><?php echo $cst->cp ?></td>
                <td><?php echo anchor('custommer/custommer/detail/'.$cst->id,'<div class="btn btn-success btn-sm "><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript:return confirm('Anda yakin hapus')"><?php echo anchor('custommer/custommer/hapus/'.$cst->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('custommer/custommer/edit/'.$cst->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
        </div>
    </section>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PELANGGAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('custommer/custommer/tambah_aksi'); ?>
            
            <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
                <label>NOMOR INTERNET</label>
                <input type="text" name="inet" class="form-control">
            </div>

            <div class="form-group">
                <label>alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>

            <div class="form-group">
                <label>CP</label>
                <input type="text" name="cp" class="form-control">
            </div>


            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
	
</div>