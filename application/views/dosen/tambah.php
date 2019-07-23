<div class="container">
   <div class="row">
      <div class="col-md-6">

         <div class="card">
            <div class="card-header">
               Tambah Data Dosen
            </div>
            <div class="card-body">

               <form method="POST">
                  <div class="form-group">
                     <label for="nip">Nip</label>
                     <input type="text" class="form-control" id="nip" name="nip">
                     <small class="form-text text-danger"><?php echo form_error('nip'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="nama">Nama</label>
                     <input type="text" class="form-control" id="nama" name="nama">
                     <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                     <label for="mata_kuliah">Mata Kuliah</label>
                     <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah">
                     <small class="form-text text-danger"><?php echo form_error('mata_kuliah'); ?></small>
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Tambah</button>
               </form>
            </div>
         </div>

      </div>
   </div>
</div>