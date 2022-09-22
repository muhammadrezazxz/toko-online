<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Edit Barang</h2>
            <form class="mt-4" action="/barang/update/<?= $barang['id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $barang['slug']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $barang['gambar']; ?>">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $barang['judul'] ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : $barang['harga'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="stok" name="stok" value="<?= (old('stok')) ? old('stok') : $barang['stok'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $barang['deskripsi'] ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <la bel for="kategori" class="col-sm-2 col-form-label">Kategori</la>
                    <select class="form-select col-sm-5 ms-2" aria-label="Default select example" name="kategori" value="<?= (old('kategori')) ? old('kategori') : $barang['kategori'] ?>">
                        <!-- <option selected class="disabled">Pilih..</option> -->
                        <option>Elektronik</option>
                        <option>Barang sekolah</option>
                        <option>Sembako</option>
                    </select>
                </div>
                <div class=" row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/assets/img/produk/<?= $barang['gambar']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar"><?= $barang['gambar']; ?></label>
                        </div>
                    </div>
                </div>
                <!-- <a href="/barang/save" class="btn btn-primary">Tambah Data</a> -->
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>