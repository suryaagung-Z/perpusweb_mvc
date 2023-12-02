<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Anggota</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/anggota/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['anggota']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="masukkan nama" name="nama" value="<?= $data['anggota']['nama']; ?>">
                  <label>poto</label>
                  <input type="file" class="form-control" placeholder="masukkan photo" name="poto" value="<?= $data['anggota']['poto']; ?>">
                  <label>Nisn</label>
                  <input type="text" class="form-control" placeholder="masukkan nisn" name="nisn" value="<?= $data['anggota']['nisn']; ?>">
                  <label>Kelas</label>
                  <input type="text" class="form-control" placeholder="masukkan kelas" name="kelas" value="<?= $data['anggota']['kelas']; ?>">
                  <label>Jenis Kelamin</label>
                  <input type="text" class="form-control" placeholder="masukkan jenis kelamin" name="jk" value="<?= $data['anggota']['jk']; ?>">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="masukkan alamat" name="alamat" value="<?= $data['anggota']['alamat']; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->