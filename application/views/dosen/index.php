<div class="container">

   <?php if ($this->session->flashdata('flash')) : ?>
      <div class="row">
         <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               Data <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
         </div>
      </div>
   <?php endif; ?>

   <div class="row mt-3">
      <div class="col-md-6">
         <a href="<?php echo base_url('dosen/tambahDataDosen'); ?>" class="btn btn-primary">Tambah Data Dosen</a>
      </div>
   </div>

   <div class="row mt-3">
      <div class="col-md-6">
         <form action="" method="post">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Cari data dosen" name="keyword">
               <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Cari</button>
               </div>
            </div>
         </form>
      </div>
   </div>

   <div class="row mt-3">
      <div class="col-md-6">
         <h3>Daftar Dosen</h3>
         <table class="table table-bordered table-hover text-center">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nip</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Matkul</th>
                  <th scope="col">Hapus</th>
               </tr>
            </thead>

            <tbody>
               <?php $no = 1; ?>
               <?php foreach ($dosen as $dsn) : ?>
                  <tr>
                     <th scope="row"><?php echo $no++; ?></th>
                     <td><?php echo $dsn['nip']; ?></td>
                     <td><?php echo $dsn['nama']; ?></td>
                     <td><?php echo $dsn['mata_kuliah']; ?></td>
                     <td>
                        <a href="<?php echo base_url('dosen/ubah/'); ?><?php echo $dsn['id']; ?>" class="btn btn-primary btn-sm">Ubah</a>
                        <a href="<?php echo base_url('dosen/hapus/'); ?><?php echo $dsn['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ?');">Hapus</a>
                     </td>
                  </tr>
               </tbody>
            <?php endforeach; ?>
         </table>

         <!-- Jika mahasiswa yang dicari tidak ada/keyword pencarian -->
         <?php if (empty($dosen)) : ?>
            <div class="alert alert-danger" role="alert">
               Data dosen tidak ditemukan!!
            </div>
         <?php endif; ?>

      </div>
   </div>
</div>