<?= $this->include('layout/topbar'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                EDIT Data UMKM
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-md-8">
                    <div class="card-body">
                        <form class="user" action="/kegiatan/update/<?= $kegiatan['id']; ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="slug" value="<?= $kegiatan['slug']; ?>">
                            <input type="hidden" name="dokumentasiLama" value="<?= $kegiatan['dokumentasi']; ?>">
                            <div class="form-group row">
                                <label for="nama_kegiatan" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('nama_kegiatan')) ? 'is-invalid' : ''; ?>" id="nama_kegiatan" name="nama_kegiatan" autofocus value="<?= (old('nama_kegiatan')) ? old('nama_kegiatan') : $kegiatan['nama_kegiatan']; ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('nama_kegiatan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $kegiatan['deskripsi']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempat_kegiatan" class="col-sm-2 col-form-label">Tempat Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tempat_kegiatan" name="tempat_kegiatan" value="<?= (old('tempat_kegiatan')) ? old('tempat_kegiatan') : $kegiatan['tempat_kegiatan']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="waktu_kegiatan" class="col-sm-2 col-form-label">Waktu Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="waktu_kegiatan" name="waktu_kegiatan" value="<?= (old('waktu_kegiatan')) ? old('waktu_kegiatan') : $kegiatan['waktu_kegiatan']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="waktu_dibuat" class="col-sm-2 col-form-label">Waktu Dibuat</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="waktu_dibuat" name="waktu_dibuat" value="<?= (old('waktu_dibuat')) ? old('waktu_dibuat') : $kegiatan['waktu_dibuat']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dokumentasi" class="col-sm-2 col-form-label">Dokumentasi</label>
                                <div class="col-sm-2">
                                    <img src="/img/<?= $kegiatan['dokumentasi']; ?>" class="img-thumbnail img-preview">
                                </div>
                                <div class="col-sm-10">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('dokumentasi')) ? 'is-invalid' : ''; ?>" id="dokumentasi" name="dokumentasi" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('dokumentasi'); ?>
                                    </div>
                                    <label class="custom-file-label" for="Dokumentasi"><?= $kegiatan['dokumentasi']; ?></label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>

                        <br><br>
                        <a href="/kegiatan">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function previewImg() {
        const dokumentasi = document.querySelector('#dokumentasi');
        const dokumentasiLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        dokumentasiLabel.textContent = dokumentasi.files[0].name;

        const fileDok = new FileReader();
        fileDok.readAsDataURL(dokumentasi.files[0]);

        fileDok.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?= $this->include('layout/footer'); ?>