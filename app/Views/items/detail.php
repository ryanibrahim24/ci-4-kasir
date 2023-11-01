<?= $this->extend('layout\template') ?>

<?= $this->section('content') ?>

<section class="mt-4 justify-content-center">
    <div class="card col-md-8 mx-auto">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Item Details</b></div>
                <div class="col col-md-6">
                    <a href="<?= url_to('items') ?>" class="btn btn-primary btn-sm float-right">View All</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-4 col-label-form"><b>Nama Barang</b></label>
                <div class="col-sm-8">
                    <?= $items['nama_barang'] ?>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-label-form"><b>Tanggal Masuk</b></label>
                <div class="col-sm-8">
                    <?= $items['created_at'] ?>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-4 col-label-form"><b>Jenis Barang</b></label>
                <div class="col-sm-8">
                    <?= $items['jenis_barang'] ?>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-4 col-label-form"><b>Kode Barang</b></label>
                <div class="col-sm-8">
                    <?= $items['kode_barang'] ?>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-4 col-label-form"><b>Jumlah Barang</b></label>
                <div class="col-sm-8">
                    <?= $items['jumlah_barang'] ?>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-4 col-label-form"><b>Harga Jual</b></label>
                <div class="col-sm-8">
                    <?= $items['harga_jual'] ?>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-4 col-label-form"><b>Foto Barang</b></label>
                <div class="col-sm-8">
                    <?php if ($items['foto_barang']) : ?>
                        <img src="/image/<?= $items['foto_barang'] ?>" width="200px">
                    <?php else : ?>
                        Tidak ada foto
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>