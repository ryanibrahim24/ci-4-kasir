<?= $this->extend('layout\template') ?>

<?= $this->section('content') ?>
<section class="mt-4">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
    <?php endif; ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">List Penjualan</h1>
    <p class="mb-4">Kair / List Penjualan</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold ">List Penjualan</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">ID Penjualan</th>
                            <th class="text-center">Nama Kasir</th>
                            <th class="text-center">Waktu Penjualan</th>
                            <th class="text-center">Total Harga</th>
                            <th class="text-center">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($orders) > 0) : ?>
                            <?php foreach ($orders as $order) : ?>
                                <tr>
                                    <td class="text-center"><?= $order['id'] ?></td>
                                    <td class="text-center"><?= $order['nama_kasir'] ?></td>
                                    <td class="text-center"><?= $order['created_at'] ?></td>
                                    <td class="text-center"><?= $order['total_harga'] ?></td>
                                    <td class="text-center">
                                        <form action="orders/<?= $order['id'] ?>" method="post" class="d-inline">
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