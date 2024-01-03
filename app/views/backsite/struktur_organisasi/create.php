<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php
        Flasher::Message();
        ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tambah strukturorganisasi</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/struktur_organisasi/store" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td class="fw-bold" width="130">Gambar</td>
                        <td>
                          <div class="form-group">
                            <label for="gambar" class="visually-hidden">Gambar</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold" width="130">Nama</td>
                        <td><input type="text" class="form-control" name="nama"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold" width="130">jabatan</td>
                        <td><input type="text" class="form-control" name="jabatan"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold" width="130">parent_key</td>
                        <td>
                          <select class="form-control" name="parent_key">
                            <option selected disabled>--choose---</option>
                            <?php foreach ($data['tree_parent'] as $tree) { ?>
                              <option value="<?= $tree['id'] ?>"><?= $tree['id'] . " - " . $tree['nama'] ?></option>
                            <?php } ?>
                          </select>
                        </td>
                      <tr>
                        <td colspan="2">
                          <button type="submit" class="btn btn-primary" name="proses">Simpan Data</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </form>
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