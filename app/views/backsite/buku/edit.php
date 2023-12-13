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
                  <label>Klasifikasi Buku</label>
                  <input type="text" class="form-control" placeholder="masukkan klasifikasi  buku anda..." name="klasifikasi" value="<?= $data['buku']['klasifikasi']; ?>">
                  <label>Kelas</label>
                  <input type="text" class="form-control" placeholder="masukkan kelas siswa..." name="kelas" value="<?= $data['buku']['kelas']; ?>">
                  <label>Kota Buku</label>
                  <input type="text" class="form-control" placeholder="masukkan kota  buku..." name="kota" value="<?= $data['buku']['kota']; ?>">
                  <label>Alamat Buku</label>
                  <input type="text" class="form-control" placeholder="masukkan alamat  buku anda..." name="alamat" value="<?= $data['buku']['alamat']; ?>">
                  <label>Tahun Terbit Buku</label>
                  <input type="text" class="form-control" placeholder="masukkan tahunterbit masuk buku anda..." name="tahunterbit" value="<?= $data['buku']['tahunterbit']; ?>">
                  <label>Phone</label>
                  <input type="text" class="form-control" placeholder="masukkan tlp masuk buku anda..." name="tlp" value="<?= $data['buku']['tlp']; ?>">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" placeholder="masukkan keterangan buku anda..." name="keterangan" value="<?= $data['buku']['keterangan']; ?>">
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