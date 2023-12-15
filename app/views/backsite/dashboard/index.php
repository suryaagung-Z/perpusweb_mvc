<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="alert alert-secondary" role="alert">
      Selamat Datang, Administrator di Administrator Perpustakaan LTE CS.
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
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>

    <div class="row mt-5">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow" style="background-color: #CCCCCC; background-size: cover; background-position: center;">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Data Anggota</h3>
              </div>
              <div class="col text-right">
                <a href="<?= BASEURL; ?>/backsite/anggota" class="btn btn-sm btn-primary">Lihat Semua</a>
              </div>
            </div>
          </div>



          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>Foto</th>
                  <th>Nisn</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data['anggota'] as $row) : ?>
                  <tr>
                    <td><?= $no; ?></td>

                    <td><?= $row['nama']; ?></td>
                    <td style="text-align: center;">
                      <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $row['foto']; ?>" style="width: 60px;">
                    </td>
                    <td><?= $row['nisn']; ?></td>
                    <td><?= $row['kelas']; ?></td>
                    <td><?= $row['jk']; ?></td>
                    <td><?= $row['alamat']; ?></td>

                  </tr>
                <?php $no++;
                endforeach; ?>
              </tbody>
            </table>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <!-- Tambahkan skrip berikut di akhir file HTML Anda, tepat sebelum tag penutup </body> -->
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                var barisTabel = document.querySelectorAll('table tbody tr');

                barisTabel.forEach(function(baris, indeks) {
                  if (indeks % 2 === 0) {
                    // Baris genap
                    baris.style.backgroundColor = '#ecf0f1';
                  } else {
                    // Baris ganjil
                    baris.style.backgroundColor = '#f9f9f9';
                  }
                });
              });
            </script>
          </div>


          <!-- Tabel Data -->

          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->