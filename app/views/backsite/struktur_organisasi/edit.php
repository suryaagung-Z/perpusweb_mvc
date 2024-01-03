<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit struktur organisasi</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/struktur_organisasi/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['struktur_organisasi']['id']; ?>">
              <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" value="<?= $data['struktur_organisasi']['nama']; ?>">
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
    <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $data['struktur_organisasi']['foto']; ?>" style="width: 60px;">
  </div>
  <div class="form-group">
    <label>Jabatan</label>
    <input type="text" class="form-control" placeholder="Masukkan jabatan" name="jabatan" value="<?= $data['struktur_organisasi']['jabatan']; ?>">
  </div>
  <div class="form-group">
    <label>Parent_key</label>
    <input type="text" class="form-control" placeholder="Masukkan parent_key" name="parent_key" value="<?= $data['struktur_organisasi']['parent_key']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="proses">Update</button>
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