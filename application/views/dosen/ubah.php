<div class="container">
   <div class="row">
      <div class="col-md-6">

         <div class="card">
            <div class="card-header">
               Form Ubah Data Dosen
            </div>
            <div class="card-body">
               <form action="" method="POST">
                  <input type="hidden" name="id" value="<?php echo $dosen['id']; ?>">
                  <div class="form-group">
                     <label for="nip">Nip</label>
                     <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $dosen['nip']; ?>">
                     <small class="form-text text-danger"><?php echo form_error('nip'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="nama">nama</label>
                     <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dosen['nama']; ?>">
                     <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="mata_kuliah">Mata Kuliah</label>
                     <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" value="<?php echo $dosen['mata_kuliah']; ?>">
                     <small class="form-text text-danger"><?php echo form_error('mata_kuliah'); ?></small>
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Ubah</button>            
               </form>
               <a href="<?php echo base_url('dosen'); ?>">
                  <button type="submit" class="btn btn-info float-right mr-3">Kembali</button>
               </a>
            </div>
         </div>

      </div>
   </div>
</div>