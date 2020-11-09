<div class="container-fluid">
    <div class="row">
        <div id="content-wrapper" class="d-flex flex-column">
    <section class="content-header">
      <h4>
        Data Teknisi
      </h4>
      
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Teknisi</button>

        <div class="navbar-form navbar-right"> <?php echo form_open('teknisi/teknisi/searchTeknisi') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
        </div>
        <div class="table-responsive">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>CP</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php 
             $no = 1;
             foreach ($teknisi as $tkn) :
             ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $tkn->nama ?></td>
                <td><?php echo $tkn->alamat ?></td>
                <td><?php echo $tkn->cp ?></td>
                <td><?php echo anchor('teknisi/teknisi/detail_teknisi/'.$tkn->id,'<div class="btn btn-success btn-sm "><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript:return confirm('Anda yakin hapus')"><?php echo anchor('teknisi/teknisi/hapusTeknisi/'.$tkn->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('teknisi/teknisi/edit_teknisi/'.$tkn->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
        </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA TEKNISI</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php echo form_open_multipart('teknisi/teknisi/tambah_aksiTeknisi'); ?>
            
            <div class="form-group">
                <label>Nama Teknisi</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
                <label>alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>

            <div class="form-group">
                <label>CP</label>
                <input type="text" name="cp" class="form-control">
            </div>

            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control">
            </div>

            <div class="form-group">
                <label>Upload Foto</label>
                <input type="file" name="foto" class="form-control">
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