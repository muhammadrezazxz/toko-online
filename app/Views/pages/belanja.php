<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Shop Category</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


<!-- ================ category section start ================= -->
<section class="section-margin--small mb-5">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                        </select>
                    </div>
                    <div class="sorting mr-auto">
                        <select>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                        </select>
                    </div>
                    <div>
                        <div class="input-group filter-bar-search">
                            <input type="text" placeholder="Search">
                            <div class="input-group-append">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <?php foreach ($barang as $b) : ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="card text-center card-product">
                                    <div class="card-product__img">
                                        <img class="card-img" src="<?= base_url('/assets/img/produk/' . $b['gambar']); ?>" alt="">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><a href="/pages/detail/<?= $b['slug']; ?>
                                            "><i class="ti-search"></i></a></button></li>
                                            <li><button><a href="/pages/keranjang/<?= $b['slug']; ?>
                                            "><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">

                                        <p><?= $b['kategori']; ?></p>
                                        <h4 class="card-product__title"><a href="#"><?= $b['judul']; ?></a></h4>

                                        <p class="card-product__price">Rp <?= $b['harga']; ?></p>
                                        <p class="card-product">Stok: <?= $b['stok']; ?></p>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; ?>

                        <!-- End Best Seller -->
                    </div>
            </div>
        </div>
</section>
<!-- ================ category section end ================= -->

<!-- ================ top product area start ================= -->
<section class="related-product-area">
    <div class="container">
        <div class="section-intro pb-60px">
            <h2>Produk <span class="section-intro__style">Teratas</span></h2>
        </div>

        <?php foreach ($barang as $b) : ?>
            <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                <div class="single-search-product-wrapper">
                    <div class="single-search-product d-flex">
                        <div class="row mt-30">
                            <a href="#"><img src="<?= base_url('/assets/img/produk/' . $b['gambar']); ?>" alt=""></a>
                            <div class="desc">
                                <a href="/pages/detail/<?= $b['slug']; ?>" class="title"><?= $b['judul']; ?></a>
                                <div class="price">Rp <?= $b['harga']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<br><br>


<br><br><br>
<?= $this->endSection(); ?>