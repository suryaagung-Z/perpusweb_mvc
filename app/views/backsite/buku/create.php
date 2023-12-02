<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
         <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah Buku</h3>
          </div>
        <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/buku/store" method= "POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan judul buku anda..." id="nama" name="nama">
                </div>
                <div class="form-group">
                  <label for="gambar" class="fw-bold">Cover</label>
                  <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <div class="form-group">
                  <label>ISBN</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan isbn buku..." id="isbn" name="isbn">
                </div>
                <div class="form-group">
                  <label>No.Inventaris </label>
                  <input type="text" class="form-control"
                    placeholder="masukkan nomor inventaris buku..." id="inventaris" name="inventaris">
                </div>
                <div class="form-group">
                  <label>Pengarang</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan pengarang buku..." id="pengarang" name="pengarang">
                </div>
                <div class="form-group">
                  <label>Penerbit </label>
                  <input type="text" class="form-control"
                    placeholder="masukkan Penerbit buku..." id="penerbit" name="penerbit">
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" class="form-control"
                    placeholder="kategori buku anda..." id="kategori" name="kategori">
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input type="text" class="form-control"
                    placeholder="berapakah jumlah buku yang tersedia..." id="stok" name="stok">
                </div>
                <div class="form-group">
                  <label>Rak</label>
                  <input type="text" class="form-control"
                    placeholder="dimanakah letak buku ..." id="rak" name="rak">
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="text" class="form-control"
                    placeholder="masukkan tanggal buku anda..." id="tanggal" name="tanggal">
                </div>
                

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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