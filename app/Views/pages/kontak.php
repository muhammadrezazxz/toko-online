<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="blog-banner-area" id="contact">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Kontak Kami</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="text-decoration: none;">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<!-- ================ contact section start ================= -->
<section class="section-margin--small">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 420px;"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: -25.363,
                        lng: 131.044
                    };
                    var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                    saturation: -90
                                },
                                {
                                    lightness: 50
                                }
                            ]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#A3A3A3'
                            }]
                        }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: -31.197,
                            lng: 150.744
                        },
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel: false
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

        </div>


        <div class="row">
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Jl. Piranha Atas No. 39</h3>
                        <p>Malang, Indonesia</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                    <div class="media-body">
                        <h3><a href="#">0812-3456-7890</a></h3>
                        <p>Buka setiap hari</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a href="mailto:support@colorlib.com">faza@gmail.com</a></h3>
                        <p>Bagikan pengalamanmu!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Masukkan namamu">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Masukkan E-mail">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Pesan Anda?"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                        <button type="submit" class="button button--active button-contactForm rounded-pill">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>