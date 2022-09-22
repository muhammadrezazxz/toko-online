<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Produk</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/assets/img/produk/' . $barang['gambar']); ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $barang['judul']; ?></h5>
                            <p class="card-text">Kategori: <?= $barang['kategori']; ?></p>
                            <?php
                            function rupiah($harga)
                            {
                                $hasil = "Rp " . number_format($harga, '0', ',', '.');
                                return $hasil;
                            }
                            ?>
                            <p class="card-text">Stok: <?= $barang['stok']; ?></p>
                            <p class="card-text"><small class="text-muted">Harga: <?= rupiah($barang['harga']); ?></small></p>
                            <p class="card-text">Deskripsi: <?= $barang['deskripsi']; ?></p>

                            <a href="/barang/edit/<?= $barang['slug']; ?>" class="btn btn-outline-warning">Edit</a>

                            <form action="/barang/hapus/<?= $barang['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?');">Delete</button>
                            </form>
                            <br><br>
                            <a href="/barang/produk"> &laquo;Kembali ke Daftar Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>