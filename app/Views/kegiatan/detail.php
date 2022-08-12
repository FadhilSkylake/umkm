<?= $this->include('layout/topbar'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Detail Data UMKM
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-md-8">
                    <div class="col-md-4">
                        <img src="/img/<?= $kegiatan['dokumentasi']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="card-body">

                        <p class="card-text">Nama Kegiatan : <?= $kegiatan['nama_kegiatan']; ?></p>
                        <p class="card-text">Deskripsi Kegiatan : <?= $kegiatan['deskripsi']; ?></p>
                        <p class="card-text">Tempat Kegiatan : <?= $kegiatan['tempat_kegiatan']; ?></p>
                        <p class="card-text">Waktu Kegiatan : <?= $kegiatan['waktu_kegiatan']; ?></p>
                        <p class="card-text">Waktu Dibuat : <?= $kegiatan['waktu_dibuat']; ?></p>
                        <p class="card-text">Dokumentasi : <?= $kegiatan['dokumentasi']; ?></p>


                        <a href="/kegiatan/edit/<?= $kegiatan['slug']; ?>" class="btn btn-warning">Edit</a>

                        <form action="/kegiatan/<?= $kegiatan['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                        </form>

                        <br><br>
                        <a href="/kegiatan">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layout/footer'); ?>