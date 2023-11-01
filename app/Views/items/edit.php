<?= $this->extend('layout\template') ?>

<?= $this->section('content') ?>

<section class="col-md-6 mx-auto mt-5">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <div class="row my-3 d-flex align-items-center justify-content-between">
                <div class="col col-md-7"><b class="float-end">EDIT BARANG</b></div>
                <div class="col col-md-5">
                    <a href="<?= url_to('items') ?>" class="btn btn-info text-white btn-sm float-right">Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="/items/update/<?= $items['id'] ?>" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Nama Barang</label>
                    <div class="col-sm-8">
                        <input type="text" name="item_name" class="form-control" placeholder="Masukan Nama Barang" value="<?= $items['nama_barang'] ?>" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Jenis Barang</label>
                    <div class="col-sm-8">
                        <input type="text" name="item_jenis" class="form-control" placeholder="Masukan Jenis Barang" value="<?= $items['jenis_barang'] ?>" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Kode Barang</label>
                    <div class="col-sm-8">
                        <input type="number" name="item_kode" class="form-control" placeholder="Masukan Kode Barang" value="<?= $items['kode_barang'] ?>" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Jumlah Barang</label>
                    <div class="col-sm-8">
                        <input type="number" name="item_jumlah" class="form-control" placeholder="Masukan Jumlah Barang" value="<?= $items['jumlah_barang'] ?>" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Harga Jual</label>
                    <div class="col-sm-8">
                        <input type="number" name="item_harga" class="form-control" placeholder="Masukan Harga Jual" value="<?= $items['harga_jual'] ?>" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Foto Barang</label>
                    <div class="col col-sm-8">
                        <?php if ($items['foto_barang']) : ?>
                            <img src="/image/<?= $items['foto_barang'] ?>" width="70px">
                        <?php else : ?>
                            Tidak ada gambar
                        <?php endif; ?>
                        <input type="file" name="item_foto" />
                        <small>Kosongkan jika tidak ingin mengubah gambar</small>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-info text-white" value="Simpan" />
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>