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
                <!-- Default box -->
                <div class="card-body">
    <form action="<?= BASEURL; ?>/backsite/laporankembali/search" method="post">
        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="date" class="form-control" placeholder="" name="key">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                        <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/backsite/laporankembali">Reset</a>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
</div>

                <div class="float-right">
              <a href="<?= BASEURL; ?>/backsite/laporankembali/cetak" class="btn btn-primary mb-4"><i class="bi bi-bookmark-plus-fill">Cetak Laporan</i></a>
                </div>
                <!-- Tabel Data -->
                <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Peminjaman </th>
                  <th>Tanggal Pengembalian</th>
                  <th>Tanggal Dikembalikan</th>
                  <th>Jumlah</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data['pengembalian'] as $row) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                                      
                                       <td><?= $row['nama']; ?></td>
                                        <td><?= $row['judul']; ?></td>
                                        <td><?= $row['tanggalpinjam']; ?></td>
                                        <td><?= $row['tanggalkembali']; ?></td>
                                        <td><?= $row['kembali']; ?></td>
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
  document.addEventListener('DOMContentLoaded', function () {
    var barisTabel = document.querySelectorAll('table tbody tr');

    barisTabel.forEach(function (baris, indeks) {
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

