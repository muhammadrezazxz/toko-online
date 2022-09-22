<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- <div class="container">
    <div class="row">
        <div class="col">
            <h1>Tentang Kami</h1>
        </div>
    </div>
</div> -->
<!-- <section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Tentang Kami</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> -->
<style>
    .offerttg {
        background: url("https://images.unsplash.com/photo-1657664072744-6851525ba710?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80") right center no-repeat;
        background-size: cover
    }

    .offer__content {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
</style>

<section class="offerttg" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="offer__content text-center">
                    <h3>Tentang Kami</h3>
                    <!-- <h4>Winter Sale</h4> -->
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, illum?</p>
                    <a class="button button--active mt-3 mt-xl-4" style="text-decoration:none;" href="#">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" style="width: 1000px; margin: auto;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner shadow p-3 mb-5 bg-body rounded" style="border-radius: 16px;">
        <div class="carousel-item active">
            <img style="border-radius: 16px;" src="https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Fabyan Yastika Permana</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, sed!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img style="border-radius: 16px;" src="https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Muhammad Reza Pahlevi</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, ab!</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<hr>
<p class="h3 text-center">Kenali Kami Lebih Dalam</p>
<p class="container">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
        Hi!
    </button>
</p>
<div class="container" style="min-height: 120px;">
    <div class="collapse collapse-horizontal" id="collapseWidthExample">
        <div class="card card-body" style="width: 300px;">
            This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
        </div>
    </div>
</div>
<div class="container">
    <!-- <nav id="navbar-example2" class="navbar bg-light px-3 mb-3">
        <a class="navbar-brand" href="#">Profil</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">First</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">Second</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                </ul>
            </li>
        </ul>
    </nav> -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">
        <h4 id="scrollspyHeading1">Nama</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, esse?</p>
        <h4 id="scrollspyHeading2">Alamat</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, esse?</p>
        <h4 id="scrollspyHeading3">Produk</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, esse?</p>
        <h4 id="scrollspyHeading4">Email</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, esse?</p>
        <!-- <h4 id="scrollspyHeading5">Fifth heading</h4> -->
        <!-- <p>...</p> -->
    </div>
</div>
<br><br><br>
<?= $this->endSection(); ?>