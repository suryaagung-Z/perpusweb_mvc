<!-- Main content -->
<section class="content">
  <div class="container-fluid">
  <div class="alert alert-secondary" role="alert">
    <marquee behavior="scroll" direction="left">Selamat Datang, Pahlawan Pengetahuan yang Hebat, di Markas Besar Administrator Perpustakaan SMP PGRI Pangkalan Kerinci Kabupaten Pelalawan! Kami Merayakan Kedatangan Anda dengan Sukacita. Bersiaplah Menyelami Samudra Pengetahuan yang Tak Terbatas, Tempat di Mana Setiap Halaman Adalah Petualangan Baru. Jadilah Pelopor yang Menginspirasi, Guardian of Wisdom! Selamat Menjelajah!</marquee>
</div>



    <div class="row">
      <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $data['count_anggota']['total_rows'] ?></h3>
            <p>Anggota</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-users"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/anggota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $data['count_buku']['total_rows'] ?></h3>
            <p>Buku</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $data['count_peminjaman']['total_rows'] ?></h3>
            <p>Peminjaman</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-right-to-bracket"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/peminjaman" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?= $data['count_pengembalian']['total_rows'] ?></h3>
            <p>Pengembalian</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-right-from-bracket"></i>
          </div>
          <a href="<?= BASEURL; ?>/backsite/pengembalian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>

    

          <!-- Tabel Data -->

          <!-- /.card-body -->
         
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->