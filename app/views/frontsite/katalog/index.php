<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <main id="main">
          <!-- ======= Contact Section ======= -->
          <section id="login" class="login">
            <div class="container">
              <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"><h1> KATALOG BUKU</h1></a>
                <input type="text" id="searchInput" class="form-control mb-4" placeholder="Temukan Jendela Dunia Mu">
              </nav>
            

<div class="container mt-5">
    <div class="row">
        <?php foreach ($data['buku'] as $buku) : ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="<?= BASEURL; ?>/public/assets/frontsite/img/foto_profile/<?= $buku['foto']; ?>" class="card-img-top" alt="Cover Buku">
                    <div class="card-body">
                        <h5 class="card-title"><?= $buku['judul']; ?></h5>
                        <p class="card-text">Pengarang: <?= $buku['pengarang']; ?></p>
                        <p class="card-text">Penerbit: <?= $buku['penerbit']; ?></p>
            
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>



<!-- ... (kode setelahnya) -->

            </div>
          </section>
        </main>
      </div>
    </div>
  </div>
</section>
