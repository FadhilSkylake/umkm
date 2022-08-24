<?= $this->include('layout/topbar'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Kegiatan UMKM
            </h6>
        </div>
        <div class="card-body">
            <form action="/kelola/update/<?= $user['id'] ?>" method="post">
                <?= csrf_field(); ?>

                <div class="col-12">
                    <div class="form-floating">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" autofocus value="<?= $umkm['username']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="nama_usaha">Nama Usaha</label>
                        <input type="text" class="form-control" id="nama_usaha" placeholder="Nama Usaha" name="nama_usaha" autofocus value="<?= $umkm['nama_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="namalengkap" placeholder="Nama Usaha" name="namalengkap" autofocus value="<?= $umkm['namalengkap']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Update Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>