<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>About</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/frontsite/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/frontsite/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/frontsite/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="<?= BASEURL; ?>/assets/frontsite/img/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/frontsite/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="<?= BASEURL; ?>/assets/frontsite/img/logoku.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/home">home</a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/profil">profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/katalog">katalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/frontsite/contact">contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="login_bt">
                            <ul>
                                <li><a href="<?= BASEURL; ?>/frontsite/login"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- about section start -->
    <div class="services_section">
        <div class="services_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="section-title row justify-content-center">
                        <div class="col-lg-8">
                            <table class="table">
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <img src="<?= BASEURL; ?>/assets/frontsite/img/pgri12.png" style="width: 140px; height: auto;">
                                        <img src="<?= BASEURL; ?>/assets/frontsite/img/logosmppgri.png" style="width: 90px; height: auto;">
                                        <h5>PERPUSTAKAAN SEKOLAH MENENGAH PERTAMA PGRI</h5>
                                        <p class="fst-italic">Jl. Datuk Engku Raja Lela Putra, Pangkalan Kerinci Timur, Kec. Pangkalan Kerinci, Kab. Pelalawan Prov. Riau </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="section-title">
                        <div class="col-lg-8 pt-4 pt-lg-0 content mx-auto text-center border border-4 border-dark">
                            <p class="fst-italic">
                                Selamat datang di Sistem Informasi Perpustakaan SMP PGRI Pangkalan Kerinci, tempat di mana teknologi bertemu dengan pengetahuan dan inspirasi. Kami memandang perpustakaan sebagai pusat pembelajaran.
                            </p>
                            <div class="row justify-content-between d-flex align-items-center">
                                <div class="col-lg-6">
                                    <ul class="text-start">
                                        <li><i class="bi bi-rounded-right"></i> <strong>NPSN :</strong> 69808316</li>
                                        <li><i class="bi bi-rounded-right"></i> <strong>Status :</strong> Swasta</li>
                                        <li><i class="bi bi-rounded-right"></i> <strong>Bentuk Pendidikan :</strong> SMP</li>
                                        <li><i class="bi bi-rounded-right"></i> <strong>Status Kepemilikan :</strong> Yayasan</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="text-start">
                                        <li><i class="bi bi-rounded-right"></i> <strong>SK Pendirian Sekolah :</strong> 421/Disdik/2009/061.1</li>
                                        <li><i class="bi bi-rounded-right"></i> <strong>Tanggal SK Pendirian :</strong> 2013-10-28</li>
                                        <li><i class="bi bi-rounded-right"></i> <strong>SK Izin Operasional :</strong> 420/Disdik/2013/207</li>
                                        <li><i class="bi bi-rounded-right"></i> <strong>Tanggal SK Izin Operasional :</strong> 2013-11-29</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-heading text-uppercase">STRUKTUR ORGANISASI </h2>
                    <h3 class="section-subheading text-muted">SMPS PGRI KAB.PELALAWAN</h3>
                </div>
                <div class="row">
                    <div id="chart_org" class="w-100"></div>
                </div>
            </div>
        </section>
        </section>

        <style>
            .i_org .left {
                border: 4px solid #000;
                border-right: 0;
            }

            .i_org .left img {
                width: 100%;
                /* height: 100%; */
                object-fit: cover;
                display: block;
                padding: .3rem;
            }

            .i_org .right .box {
                height: 100%;
                display: grid;
                grid-template-rows: 1fr 1fr;
                font-weight: 600;
                font-size: 1rem;
                line-height: 110%;
                color: #000;
            }

            .i_org .right .box .top {
                background-color: #BDD7EE;
                border: 4px solid #000;
                border-bottom: 0;
            }

            .i_org .right .box .bottom {
                border: 4px solid #000;
                border-top: 0;
            }

            .google-visualization-orgchart-node {
                background: #fff;
                padding: 0;
                border: none;
            }
        </style>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', {
                packages: ["orgchart"]
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = new google.visualization.DataTable();
                data.addColumn('string', 'Name');
                data.addColumn('string', 'Manager');
                data.addColumn('string', 'ToolTip');

                const orgs = <?= $data['orgs']; ?>;

                if (orgs) {
                    const rows = [];

                    orgs.forEach(org => {
                        const row = [{
                                'v': org.id.toString(),
                                'f': `
                                <div class="row p-0 i_org">
                                    <div class="col-3 p-0 left">
                                        <img src="<?= BASEURL; ?>/assets/frontsite/img/organisasi/${org.foto ?? ''}" alt="">
                                    </div>
                                    <div class="col-9 p-0 text-uppercase right">
                                        <div class="box p-0">
                                            <div style="" class="d-flex justify-content-center align-items-center flex-column top">
                                                <span>${org.jabatan ?? ''}</span>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center flex-column bottom">
                                                <span>${org.nama ?? ''}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `,
                            },
                            org.parent_key ?? '',
                            org.title ?? '',
                        ];

                        rows.push(row);
                    });

                    data.addRows(rows);
                }



                // Create the chart.
                const chart = new google.visualization.OrgChart(document.getElementById('chart_org'));
                google.visualization.events.addListener(chart, 'ready', customStyle);

                chart.draw(data, {
                    'allowHtml': true,
                    'size': 'large',
                    'allowCollapse': true
                });

            }

            function customStyle() {
                document.querySelector('#chart_org table').style.width = "100%";
            };
        </script>
    </div>
    </div>
    </div>
</body>

</html>