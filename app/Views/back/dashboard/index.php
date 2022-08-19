<?= $this->include('layout/topbar'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Dashboard
            </h6>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah UMKM</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $daftar; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Kegiatan UMKM</h6>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="preview-list">
                    <?php $i = 1; ?>
                    <?php foreach ($kegiatan as $l) : ?>
                        <div class="preview-item border-bottom">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <img src="/img/<?= $l['dokumentasi']; ?>" width="200" height="200">
                                    <br>
                                    <h6 class="preview-subject"><?= $l['nama_kegiatan']; ?></h6>
                                    <p class="text-muted mb-0"><?= $l['deskripsi']; ?></p>
                                </div>
                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <!-- <p class="text-muted">15 minutes ago</p>
                            <p class="text-muted mb-0">30 tasks, 5 issues </p> -->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>