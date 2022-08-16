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
                        <form class="user" action="/daftar/update/<?= $daftar['id']; ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="slug" value="<?= $daftar['slug']; ?>">
                            <div class="form-group row">
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('namalengkap')) ? 'is-invalid' : ''; ?>" id="namalengkap" name="namalengkap" autofocus value="<?= (old('namalengkap')) ? old('namalengkap') : $daftar['namalengkap'] ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('namalengkap'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Nomor KTP</label>
                                    <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" value="<?= (old('nomor_ktp')) ? old('nomor_ktp') : $daftar['nomor_ktp']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Tempat Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="ttl" name="ttl" value="<?= (old('ttl')) ? old('ttl') : $daftar['ttl']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">No Telepon</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= (old('no_telp')) ? old('no_telp') : $daftar['no_telp']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">E-Mail</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= (old('email')) ? old('email') : $daftar['email']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Pendidikan Terakhir</label>
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= (old('pendidikan')) ? old('pendidikan') : $daftar['pendidikan']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $daftar['alamat']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= (old('provinsi')) ? old('provinsi') : $daftar['provinsi']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kabupaten</label>
                                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= (old('kabupaten')) ? old('kabupaten') : $daftar['kabupaten']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= (old('kecamatan')) ? old('kecamatan') : $daftar['kecamatan']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kelurahan</label>
                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= (old('kelurahan')) ? old('kelurahan') : $daftar['kelurahan']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kode Pos</label>
                                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?= (old('kode_pos')) ? old('kode_pos') : $daftar['kode_pos']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">RT/RW</label>
                                    <input type="text" class="form-control" id="rtrw" name="rtrw" value="<?= (old('rtrw')) ? old('rtrw') : $daftar['rtrw']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Nama Usaha</label>
                                    <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="<?= (old('nama_usaha')) ? old('nama_usaha') : $daftar['nama_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Bentuk Usaha</label>
                                    <input type="text" class="form-control" id="bentuk_usaha" name="bentuk_usaha" value="<?= (old('bentuk_usaha')) ? old('bentuk_usaha') : $daftar['bentuk_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Sektor Usaha</label>
                                    <input type="text" class="form-control" id="sektor_usaha" name="sektor_usaha" value="<?= (old('sektor_usaha')) ? old('sektor_usaha') : $daftar['sektor_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Deskripsi Usaha</label>
                                    <input type="text" class="form-control" id="deskripsi_usaha" name="deskripsi_usaha" value="<?= (old('deskripsi_usaha')) ? old('deskripsi_usaha') : $daftar['deskripsi_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Wilayah Usaha</label>
                                    <input type="text" class="form-control" id="wilayah_usaha" name="wilayah_usaha" value="<?= (old('wilayah_usaha')) ? old('wilayah_usaha') : $daftar['wilayah_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Tahun Berdiri</label>
                                    <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="<?= (old('tahun_berdiri')) ? old('tahun_berdiri') : $daftar['tahun_berdiri']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">No Telepon Usaha</label>
                                    <input type="text" class="form-control" id="no_telp_usaha" name="no_telp_usaha" value="<?= (old('no_telp_usaha')) ? old('no_telp_usaha') : $daftar['no_telp_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">E-mail Usaha</label>
                                    <input type="text" class="form-control" id="email_usaha" name="email_usaha" value="<?= (old('email_usaha')) ? old('email_usaha') : $daftar['email_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">NIB</label>
                                    <input type="text" class="form-control" id="nib" name="nib" value="<?= (old('nib')) ? old('nib') : $daftar['nib']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">NPWP</label>
                                    <input type="text" class="form-control" id="npwp" name="npwp" value="<?= (old('npwp')) ? old('npwp') : $daftar['npwp']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Izin Usaha</label>
                                    <input type="text" class="form-control" id="izin_usaha" name="izin_usaha" value="<?= (old('izin_usaha')) ? old('izin_usaha') : $daftar['izin_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Omzet</label>
                                    <input type="text" class="form-control" id="omzet" name="omzet" value="<?= (old('omzet')) ? old('omzet') : $daftar['omzet']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Alamat Usaha</label>
                                    <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" value="<?= (old('alamat_usaha')) ? old('alamat_usaha') : $daftar['alamat_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Provinsi Usaha</label>
                                    <input type="text" class="form-control" id="provinsi_usaha" name="provinsi_usaha" value="<?= (old('provinsi_usaha')) ? old('provinsi_usaha') : $daftar['provinsi_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kabupaten Usaha</label>
                                    <input type="text" class="form-control" id="kabupaten_usaha" name="kabupaten_usaha" value="<?= (old('kabupaten_usaha')) ? old('kabupaten_usaha') : $daftar['kabupaten_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kecamatan Usaha</label>
                                    <input type="text" class="form-control" id="kecamatan_usaha" name="kecamatan_usaha" value="<?= (old('kecamatan_usaha')) ? old('kecamatan_usaha') : $daftar['kecamatan_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kelurahan Usaha</label>
                                    <input type="text" class="form-control" id="kelurahan_usaha" name="kelurahan_usaha" value="<?= (old('kelurahan_usaha')) ? old('kelurahan_usaha') : $daftar['kelurahan_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kode Pos Usaha</label>
                                    <input type="text" class="form-control" id="kode_pos_usaha" name="kode_pos_usaha" value="<?= (old('kode_pos_usaha')) ? old('kode_pos_usaha') : $daftar['kode_pos_usaha']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">RT/RW Usaha</label>
                                    <input type="text" class="form-control" id="rtrw_usaha" name="rtrw_usaha" value="<?= (old('rtrw_usaha')) ? old('rtrw_usaha') : $daftar['rtrw_usaha']; ?>">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>

                        <br><br>
                        <a href="/daftar">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layout/footer'); ?>