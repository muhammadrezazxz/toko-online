<!-- <!DOCTYPE html> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/vendors/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/vendors/fontawesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/vendors/themify-icons/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/vendors/nice-select/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/vendors/owl-carousel/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/vendors/owl-carousel/owl.carousel.min.css') ?>">
    <link rel="icon" href="<?= base_url('/assets/img/logo2.png') ?>">

</head>



<body className='snippet-body'>
    <header class="section-header" style="position: sticky;">
        <nav class="navbar navbar-expand p-0 ">

            <div class="container-fluid shadow-sm ">
                <ul class="navbar-nav d-none d-md-flex mr-auto container">
                    <li class="nav-item"><a class="nav-link" href="/" data-abc="true">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/belanja" data-abc="true">Mulai Belanja</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/tentang_kami" data-abc="true">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/kontak" data-abc="true">Kontak</a></li>
                </ul>
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item">
                        <div class="d-flex flex-row container">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('logout'); ?>" data-abc="true">Keluar</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="/auth/masuk" data-abc="true">Masuk</a></li> -->
            </div>
            </li>


            </ul>
            </div>
        </nav>

        <section class="header-main border-bottom bg-white">
            <div class="container-fluid">
                <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
                    <div class="col-md-2">
                        <a href="/"><img class="d-none d-md-flex" src="/assets/img/logo4.png" width="100"></a>
                    </div>
                    <div class="col-md-8">
                        <ul class="nav-shop">
                            <form action="" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Cari barangmu di sini..." name="keyword">
                                    <button class="btn btn-outline-primary me-5 rounded-end" type="submit" id="button-addon2" name="submit">Cari</button>
                                    <!-- <li class="nav-item mt-2"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li> -->
                                    <li class="nav-item" style="margin-top: 5px;"><a class="nav-link" href="/pages/keranjang"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button>
                                        </a> </li>
                                </div>

                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand d-md-none d-md-flex" href="#">Kategori</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Laptop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Handphone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Television</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Furniture
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class=" dropdown-item" href="#">Table</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Chair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br><br><br><br>


    <?= $this->renderSection('content'); ?>

    </main>


    <section class="subscribe-position">
        <div class="container">
            <div class="subscribe text-center">
                <h3 class="subscribe__title">Get Update From Anywhere</h3>
                <p>Bearing Void gathering light light his eavening unto dont afraid</p>
                <div id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
                        <div class="form-group ml-sm-auto">
                            <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                            <div class="info"></div>
                        </div>
                        <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Subscribe section end ================= -->



    </main>


    <!--================ Start footer Area  =================-->
    <footer class="footer">
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Misi Kami</h4>
                            <p>
                                Untuk membuat hidup semua orang menjadi lebih mudah
                            </p>
                            <p>
                                Menawarkan berbagai rancangan yang didesain dengan baik, produk perabotan rumah yang fungsional dengan harga yang sangat rendah sehingga sebanyak mungkin orang akan mampu membelinya </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Quick Links</h4>
                            <ul class="list">
                                <li><a href="/">Home</a></li>
                                <li><a href="/pages/belanja">Belanja</a></li>
                                <li><a href="/pages/tentang_kami">Tentang Kami</a></li>
                                <li><a href="/pages/kontak">Kontak</a></li>
                                <li><a href="/logout">Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Gallery</h4>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="/assets/img/gallery/r1.jpg" alt=""></li>
                                <li><img src="/assets/img/gallery/r2.jpg" alt=""></li>
                                <li><img src="/assets/img/gallery/r3.jpg" alt=""></li>
                                <li><img src="/assets/img/gallery/r5.jpg" alt=""></li>
                                <li><img src="/assets/img/gallery/r7.jpg" alt=""></li>
                                <li><img src="/assets/img/gallery/r8.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Kontak Kami</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Lokasi
                                </p>
                                <p>Malang</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Nomor Telepon
                                </p>
                                <p>
                                    0895-3650-04303
                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    faza@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | <a href="https://instagram.com" target="_blank">Faza Store.</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="<?= base_url('/assets/vendors/jquery/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('/assets/vendors/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('/assets/vendors/skrollr.min.js') ?>"></script>
    <script src="<?= base_url('/assets/vendors/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('/assets/vendors/nice-select/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('/assets/vendors/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="<?= base_url('/assets/vendors/mail-script.js') ?>"></script>
    <script src="<?= base_url('/assets/js/main.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>