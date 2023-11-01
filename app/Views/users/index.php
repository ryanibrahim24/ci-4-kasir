<?= $this->extend('layout\template') ?>

<?= $this->section('content') ?>
<section class="mt-4">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
    <?php endif; ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">List Karyawan</h1>
    <p class="mb-4">Manajemen Karyawan / List Karyawan</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">List Karyawan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>KTP</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Status</th>
                            <th>Telefon</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($records) > 0) : ?>
                            <?php foreach ($records as $employee) : ?>
                                <tr>
                                    <td><?= $employee['name'] ?></td>
                                    <td><?= $employee['email'] ?></td>
                                    <td><?= $employee['ktp'] ?></td>
                                    <td class="text-center">
                                        <?php if ($employee['role'] == "admin") : ?>
                                            <button class="btn btn-primary btn-sm ">ADM</button>
                                            <button class="btn btn-info btn-sm">KSR</button>
                                        <?php else : ?>
                                            <button class="btn btn-info btn-sm">KSR</button>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($employee['active'] == 1) : ?>
                                            <button class="btn btn-success"></button>
                                        <?php else : ?>
                                            <button class="btn btn-danger"></button>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $employee['phone'] ?></td>
                                    <td>
                                        <a href="users/edit/<?= $employee['id'] ?>" class="btn btn-success">Edit</a>
                                        <form action="users/<?= $employee['id'] ?>" method="post" class="d-inline">
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