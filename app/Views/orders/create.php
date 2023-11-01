<?= $this->extend('layout\template') ?>

<?= $this->section('content') ?>
<section class="mt-4">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
    <?php endif; ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Keranjang Pesanan</h1>
    <p class="mb-4">Kasir / Keranjang Pesanan</p>

    <!-- order Component -->
    <form action="" class="mg-top-15">
        <div class="col-12">
            <input class="col-9" type="text" name="kata_kunci" placeholder="Pencarian">
            <input type="submit" name="submit" value="Scan" class="btn btn-success text-white col-2 float-right">
        </div>
    </form>
    <div class="card mt-4">
        <h5 class="card-header text-white bg-primary">Keranjang Pesanan</h5>
        <?php if ($barang) : ?>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?= $totalbarang = $barang['harga_jual'] * $jumlahbarang ?>
                            <th scope="row"><?= $barang['nama_barang'] ?></th>
                            <td><?= $barang['harga_jual'] ?></td>
                            <td>
                                <form action="" class="mg-top-15">
                                    <div class="">
                                        <input class="" type="number" name="jumlahbarang" value=1>
                                        <input type="submit" name="submit" value="Tambah" class="btn btn-info text-white float-end">
                                    </div>
                                </form>
                            </td>
                            <td><?= $totalbarang ?></td>
                            <td class="col-1">
                                <form action="" class="mg-top-15">
                                    <div class="">
                                        <input class="" type="number" name="kata_kunci" hidden>
                                        <input type="submit" name="submit" value="Delete" class="btn btn-danger text-white float-right">
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Total Pembelian:</th>
                            <td></td>
                            <td></td>
                            <td><?= $totalbarang ?></td>
                        </tr>
                        <tr>
                            <th class="" scope="row"><a href="/" class="btn btn-warning">Kembali</a></th>
                            <td class="" colspan="2">
                                <form action="" class="mg-top-15">
                                    <div class="">
                                        <input class="" type="text" name="kata_kunci" placeholder="Pencarian" hidden>
                                        <input type="submit" name="submit" value="Reset Pesanan" class="btn btn-danger text-white float-right">
                                    </div>
                                </form>
                            </td>
                            <td class="">
                                <form method="post" action="<?= url_to('orders') ?>" enctype="multipart/form-data" class="mg-top-15 float-right">
                                    <div class="">
                                        <input class="" type="number" name="total_harga" value="<?= $totalbarang ?>" hidden>
                                        <input type="submit" name="submit" value="pembayaran >" class="btn btn-success text-white">
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <a href="<?= url_to('orders') ?>" class="btn btn-warning col-2 mt-4">Kembali</a>
        <?php endif; ?>
    </div>


</section>

<?= $this->endSection() ?>