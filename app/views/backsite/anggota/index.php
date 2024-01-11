 <!-- Main content -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
 <section class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-12">
         <?php
          Flasher::Message();
          ?>
         <div class="container-fluid">
           <div class="row">
             <div class="col-12">
               <!-- Default box -->
               <div class="card" id="table_p">
                 <div class="card-header">
                   <h3 class="card-title">Anggota</h3>
                 </div>
                 <div class="card-body">
                   <div class="float-right">
                     <a href="<?= BASEURL; ?>/backsite/anggota/create" class="btn btn-primary mb-4"><i class="bi bi-bookmark-plus-fill">TAMBAH DATA</i>
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                         <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0
                            0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
                       </svg></a>
                   </div>
                   <table class="table table-bordered display" id="for_datatable">
                     <thead>
                       <tr>
                         <th style="width: 10px">No</th>
                         <th>Nama</th>
                         <th>Foto</th>
                         <th>NISN</th>
                         <th>Kelas</th>
                         <th>Jenis Kelamin</th>
                         <th>Alamat</th>
                         <th style="width: 80px">Action</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php $no = 1; ?>
                       <?php foreach ($data['anggota'] as $row) : ?>
                         <tr>
                           <td><?= $no; ?></td>

                           <td><?= $row['nama']; ?></td>
                           <td>
                             <img src="<?= BASEURL . "/public/assets/frontsite/img/anggota/" . $row['foto']; ?>" style="width: 60px;" <?= $row['nama']; ?>>
                           </td>
                           <td><?= $row['nisn']; ?></td>
                           <td><?= $row['kelas']; ?></td>
                           <td><?= $row['jk']; ?></td>
                           <td><?= $row['alamat']; ?></td>
                           <td>
                             <a href="<?= BASEURL; ?>/backsite/anggota/edit/<?= $row['id'] ?>" class="badge badge-info"><i class="bi bi-pencil-square"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                 <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                 <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                               </svg></a>
                             <a href="<?= BASEURL; ?>/backsite/anggota/deploy/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');"><i class="bi bi-trash3"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                 <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                               </svg></a>
                             <a href="<?= BASEURL; ?>/backsite/anggota/print/<?= $row['id'] ?>" class="badge badge-info"><i class="bi bi-printer"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
</svg></a>
                           </td>

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
       </div>
 </section>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script lang="javascript">
  let table = new DataTable('#for_datatable', {
    responsive: true
  });
</script>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->