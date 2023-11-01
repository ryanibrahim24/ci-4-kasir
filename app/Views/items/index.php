<?= $this->extend('layout\template') ?>

<?= $this->section('content') ?>
<section class="mt-4">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
    <?php endif; ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Inventory</h1>
    <p class="mb-4">Manajemen Barang / List Barang</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold ">Data Barang</h6>
            </div>
            <div class="col-6">
                <a href="<?= url_to('items/create') ?>" class="btn btn-primary btn-sm float-right">Tambah Barang</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Foto Barang</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Tgl Masuk</th>
                            <th class="text-center">Jenis Barang</th>
                            <th class="text-center">Kode Barang</th>
                            <th class="text-center">Jumlah Barang</th>
                            <th class="text-center">Harga Jual</th>
                            <th class="text-center">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($items) > 0) : ?>
                            <?php foreach ($items as $item) : ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td class="text-center">
                                        <?php if ($item['foto_barang']) : ?>
                                            <img src="/image/<?= $item['foto_barang'] ?>" width="70px">
                                        <?php else : ?>
                                            N/A
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $item['nama_barang'] ?></td>
                                    <td><?= $item['created_at'] ?></td>
                                    <td><?= $item['jenis_barang'] ?></td>
                                    <td><?= $item['kode_barang'] ?></td>
                                    <td><?= $item['jumlah_barang'] ?></td>
                                    <td><?= $item['harga_jual'] ?></td>
                                    <td>
                                        <a href="items/edit/<?= $item['id'] ?>" class="btn btn-success">Edit</a>
                                        <a href="items/<?= $item['id'] ?>" class="btn btn-info">Detail</a>
                                        <form action="items/<?= $item['id'] ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" onsubmit="return confirm('Hapus data permanen?')" value="DELETE">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5" class="text-center">No Data Found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>