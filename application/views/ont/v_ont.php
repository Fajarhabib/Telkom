<div class="container-fluid">
    <div class="row">
        <div id="content-wrapper" class="d-flex flex-column">
    <section class="content-header">
      <h4>
        Data ONT
      </h4>
      
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data ONT</button>

        <div class="navbar-form navbar-right"> <?php echo form_open('ont/ont/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
        </div>
        <div class="table-responsive">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>SN LAMA</th>
                <th>SN BARU</th>
                <th>TIKET</th>
                
                <th colspan="2">AKSI</th>
            </tr>
            <?php 
             $no = 1;
             foreach ($ont as $ont) :
             ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ont->snlama ?></td>
                <td><?php echo $ont->snbaru ?></td>
                <td><?php echo $ont->tiket ?></td>
                
                <td><?php echo anchor('ont/ont/detail/'.$ont->id,'<div class="btn btn-success btn-sm "><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript:return confirm('Anda yakin hapus')"><?php echo anchor('ont/ont/hapus/'.$ont->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('ont/ont/edit/'.$ont->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA ONT</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php echo form_open_multipart('ont/ont/tambah_aksi'); ?>
            
            <div class="form-group">
                <label>SN LAMA</label>
                <input type="text" name="snlama" class="form-control">
            </div>

            <div class="form-group">
                <label>SN BARU</label>
                <input type="text" name="snbaru" class="form-control">
            </div>

            <div class="form-group">
                <label>TIKET</label>
                <input type="text" name="tiket" class="form-control">
            </div>

            <div class="form-grup">
                            <label>BA</label>
                            <select class="form-control" name="ba">
                                <option>Done</option>
                                <option>NOK</option>
                            </select>
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