<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit buku</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/buku/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" placeholder="masukkan judul buku anda..." name="judul" value="<?= $data['buku']['judul']; ?>">
                  <label>Cover</label>
                  <input type="file" class="form-control" placeholder="masukkan cover buku anda..." name="foto" value="<?= $data['buku']['foto']; ?>">
                  <label>ISBN</label>
                  <input type="text" class="form-control" placeholder="masukkan isbn buku anda..." name="isbn" value="<?= $data['buku']['isbn']; ?>">
                  <label>No.Inventaris</label>
                  <input type="text" class="form-control" placeholder="masukkan nomor inventaris buku anda..." name="inventaris" value="<?= $data['buku']['inventaris']; ?>">
                  <label>Pengarang</label>
                  <input type="text" class="form-control" placeholder="masukkan pengarang buku anda..." name="pengarang" value="<?= $data['buku']['pengarang']; ?>">
                  <label>Penerbit</label>
                  <input type="text" class="form-control" placeholder="masukkan penerbit buku..." name="penerbit" value="<?= $data['buku']['penerbit']; ?>">
                  <label>Kategori</label>
                  <input type="text" class="form-control" placeholder="masukkan kategori buku anda..." name="kategori" value="<?= $data['buku']['kategori']; ?>">
                  <label>Stok</label>
                  <input type="text" class="form-control" placeholder="berapakah jumlah buku yang tersedia" name="stok" value="<?= $data['buku']['stok']; ?>">
                  <label>Rak</label>
                  <input type="text" class="form-control" placeholder="masukkan nama rak buku anda..." name="rak" value="<?= $data['buku']['rak']; ?>">
                  <label>Tanggal Masuk</label>
                  <input type="date" class="form-control" placeholder="masukkan tanggal masuk buku anda..." name="tanggal" value="<?= $data['buku']['tanggal']; ?>">
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