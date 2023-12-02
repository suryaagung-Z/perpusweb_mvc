<main id="main">
    <section id="resume" class="resume">
        <?php
        // Data buku
        $menuItems = [
            ['001', 'Aku cinta dunia', 0, 'Nasi goreng dengan telur, .', BASEURL . '/assets/frontsite/img/buku2.jpg'],
            ['002', 'Mie Ayam Bakso', 0, 'Mie ayam dengan bakso, .', BASEURL . '/assets/frontsite/img/teknik.jpg'],
            ['003', 'Buku 3', 0, 'Deskripsi buku 3', BASEURL . '/assets/frontsite/img/pgri.jpg'],
            ['004', 'Buku 4', 0, 'Deskripsi buku 4', BASEURL . '/assets/frontsite/img/buku4.jpg'],
            ['005', 'Buku 5', 0, 'Deskripsi buku 5', BASEURL . '/assets/frontsite/img/buku5.jpg'],
            ['006', 'Buku 6', 0, 'Deskripsi buku 6', BASEURL . '/assets/frontsite/img/buku6.jpg'],
            ['007', 'Buku 7', 0, 'Deskripsi buku 7', BASEURL . '/assets/frontsite/img/buku7.jpg'],
            ['008', 'Buku 8', 0, 'Deskripsi buku 8', BASEURL . '/assets/frontsite/img/buku8.jpg'],
            ['009', 'Buku 9', 0, 'Deskripsi buku 9', BASEURL . '/assets/frontsite/img/buku9.jpg'],
            ['010', 'Buku 10', 0, 'Deskripsi buku 10', BASEURL . '/assets/frontsite/img/buku10.jpg'],
            // Tambahkan data buku lainnya jika diperlukan
        ];

        ?>

        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"><h1> KATALOG BUKU</h1></a>
                <input type="text" id="searchInput" class="form-control mb-4" placeholder="Temukan Jendela Dunia Mu">
            </nav>
            <form class="form-inline" id="formItem">
                <div class="row" id="listPromotions">
                    <?php
                    // Looping melalui setiap menu buku
                    foreach ($menuItems as $item) {
                    ?>
                        <div class="col-md-3 mt-2 event-promo">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo $item[4]; ?>" class="card-img-top menu-image" alt="Menu Image" style="width: 284px; height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $item[1]; ?></h5>
                                    <p class="card-text"><?php echo $item[3]; ?></p>
                                    <p class="card-text">Rp <?php echo $item[2]; ?></p>
                                    <button class="btn btn-primary" id="showLocation" data-lat="latitude" data-lng="longitude">
                                        <!-- <a href="https://wa.me/68974395648" style="color: white; text-decoration: none;">Lihat Detail</a> -->
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
    </section>
</main>
