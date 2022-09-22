<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Tambah Data</h2>
            <form class="mt-4" action="/barang/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">

                        <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">

                        <input type="number" class="form-control" id="stok" name="stok" value="<?= old('stok'); ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <la bel for="kategori" class="col-sm-2 col-form-label">Kategori</la>
                    <select class="form-select col-sm-5 ms-2" aria-label="Default select example" name="kategori" value="<?= old('kategori'); ?>">
                        <!-- <option >Pilih..</option> -->
                        <option>Elektronik</option>
                        <option>Barang sekolah</option>
                        <option>Sembako</option>
                    </select>
                </div>
                <div class=" row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/assets/img/produk/default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar">Pilih gambar...</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">

                        <input type="text" style="height: 100px;" class="form-control" id="deskipsi" name="deskripsi" value="<?= old('deskripsi'); ?>">
                    </div>
                </div>
                <!-- <a href="/barang/save" class="btn btn-primary">Tambah Data</a> -->
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>

    </div>
</div>
<!-- <script type="text/javascript">
    var harga = document.getElementById('harga');
    harga.addEventListener('keyup', function(e) {
        harga.value = formatharga(this.value, 'Rp. ');
    })

    function formatharga(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            harga = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            separator = sisa ? '.' : '';
            harga += separator + ribuan.join('.');
        }

        harga = split[1] != undefined ? harga + ',' + split[1] : harga;
        return prefix == undefined ? harga : (harga ? 'Rp.' + harga : '');
    }
</script> -->
<?= $this->endSection(); ?>