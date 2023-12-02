<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Print Kartu Anggota</h3>
          </div>
          <body onload="print()">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/anggota/print" method="POST" name="frmedit">
          <h2>DAFTAR LAPORAN TRANSAKSI PEMESANAN</h2> <hr> <br></h4>PERIODE PEMESANAN <b>
              <!-- /.card-body -->
             

              
              <td><?= $no; ?></td>
                                    
                                       <td><?= $row['nama']; ?></td>
                                       <td style="text-align: center;"><img src="<?= BASEURL; ?>/assets/frontsite/img/"<?php echo $row['poto']; ?> style="width: 120px;"></td>
                                        <td><?= $row['nisn']; ?></td>
                                        <td><?= $row['kelas']; ?></td>
                                        <td><?= $row['jk']; ?></td>
                                        <td><?= $row['alamat']; ?></td>
                    <td>
                        
              <div class="card-footer">
              <input type="button" value="Export PDF" onclick="window.open('laporan-cetak.php', '_blank')">
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