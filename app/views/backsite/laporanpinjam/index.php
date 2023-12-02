<!-- Konten Utama -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="d-flex justify-content-end flex-column flex-sm-row mb-4" style="gap:0.8rem;">
                  <div class="">
                    <form action="<?= BASEURL; ?>/backsite/laporanpinjam/cetak" method="POST">
                      <div class="input-group datepicker">
                        <input type="date" class="form-control" placeholder="" name="date" required>
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                          <button class="btn btn-outline-danger" type="reset">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="">
                    <form action="<?= BASEURL; ?>/backsite/laporanpinjam/cetak" method="POST">
                      <button class="btn btn-primary" type="submit"><i class="bi bi-bookmark-plus-fill">Cetak Laporan</i></button>
                    </form>
                  </div>
                </div>
                <!-- Tabel Data -->
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Judul Buku</th>
                      <th>Tanggal Pinjam </th>
                      <th>Tanggal Pengembalian</th>
                      <th>Jumlah</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data['peminjaman'] as $row) : ?>
                      <tr>
                        <td><?= $no; ?></td>

                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['kelas']; ?></td>
                        <td><?= $row['judul']; ?></td>
                        <td><?= $row['tanggalpinjam']; ?></td>
                        <td><?= $row['tanggalkembali']; ?></td>
                        <td><?= $row['jumlah']; ?></td>
                        <td><?= $row['status']; ?></td>
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

            </div>
          </div>
      </div>
    </div>
</section>
</div>