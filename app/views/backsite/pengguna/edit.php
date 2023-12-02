<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit pengguna</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/pengguna/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['pengguna']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="masukkan nama" name="nama" value="<?= $data['pengguna']['nama']; ?>">
                  <label>Foto</label>
                  <input type="file" class="form-control" placeholder="masukkan photo" name="foto" value="<?= $data['pengguna']['foto']; ?>">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="masukkan email" name="email" value="<?= $data['pengguna']['email']; ?>">
                  <label>Phone</label>
                  <input type="text" class="form-control" placeholder="masukkan tlp" name="tlp" value="<?= $data['pengguna']['tlp']; ?>">
                  <label>Status</label>
                  <input type="text" class="form-control" placeholder="masukkan status" name="status" value="<?= $data['pengguna']['status']; ?>">
                  <label>Level</label>
                  <input type="text" class="form-control" placeholder="masukkan level" name="level" value="<?= $data['pengguna']['level']; ?>">
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