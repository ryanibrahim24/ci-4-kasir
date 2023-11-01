<?= $this->extend('layout\template') ?>

<?= $this->section('content') ?>
<section class="col-md-6 mx-auto mt-5">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <div class="row my-3 d-flex align-items-center justify-content-between">
                <div class="col col-md-7"><b class="float-end">REGISTER KARYAWAN</b></div>
                <div class="col col-md-5">
                    <a href="<?= url_to('users') ?>" class="btn btn-info text-white btn-sm float-right">Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="<?= url_to('users') ?>" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Nama Pegawai</label>
                    <div class="col-sm-8">
                        <input type="text" name="user_name" class="form-control" placeholder="Masukan Nama Pegawai" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Username</label>
                    <div class="col-sm-8">
                        <input type="text" name="user_username" class="form-control" placeholder="Masukan Username" />
                    </div>
                </div>
                <!-- <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="user_password" class="form-control" placeholder="Masukan Password" />
                    </div>
                </div> -->
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="user_email" class="form-control" placeholder="Masukan Email" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">KTP</label>
                    <div class="col-sm-8">
                        <input type="number" name="user_ktp" class="form-control" placeholder="Masukan No KTP" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Telephone</label>
                    <div class="col-sm-8">
                        <input type="number" name="user_phone" class="form-control" placeholder="Masukan No Telephone" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-label-form">Role</label>
                    <div class="col-sm-8">
                        <select name="user_role" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="kasir">Kasir</option>
                        </select>
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