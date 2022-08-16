<?= $this->include('front/template/top'); ?>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">FORMULIR</h6>
            <h1 class="display-6 mb-4">Pendaftaran UMKM Baru</h1>
        </div>
        <div class="row g-0 justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                <p class="text-center mb-4">Isikan data dibawah dengan sesuai dan benar.</a></p>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <form action="/pendaftaran/save" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('namalengkap')) ? 'is-invalid' : ''; ?>" id="namalengkap" placeholder="Nama Lengkap" name="namalengkap" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('namalengkap'); ?>
                                </div>
                                <label for="namalengkap">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('nomor_ktp')) ? 'is-invalid' : ''; ?>" id="nomor_ktp" placeholder="Nomor KTP" name="nomor_ktp" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_ktp'); ?>
                                </div>
                                <label for="nomor_ktp">Nomor KTP</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('ttl')) ? 'is-invalid' : ''; ?>" id="ttl" placeholder="Tempat Tanggal Lahir" name="ttl" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('ttl'); ?>
                                </div>
                                <label for="ttl">Tempat Tanggal Lahir</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : ''; ?>" id="no_telp" placeholder="Nomor Telepon" name="no_telp" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_telp'); ?>
                                </div>
                                <label for="no_telp">Nomor Telepon</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" placeholder="E-Mail" name="email" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                                <label for="email">E-Mail</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('pendidikan')) ? 'is-invalid' : ''; ?>" id="pendidikan" placeholder="Pendidikan" name="pendidikan" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pendidikan'); ?>
                                </div>
                                <label for="pendidikan">Pendidikan</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" placeholder="Alamat" name="alamat" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                                <label for="alamat">Alamat</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" id="provinsi" placeholder="Provinsi" name="provinsi" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('provinsi'); ?>
                                </div>
                                <label for="provinsi">Provinsi</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" id="kabupaten" placeholder="Kabupaten" name="kabupaten" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kabupaten'); ?>
                                </div>
                                <label for="kabupaten">Kabupaten</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" id="kecamatan" placeholder="Kecamatan" name="kecamatan" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kecamatan'); ?>
                                </div>
                                <label for="kecamatan">Kecamatan</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('kelurahan')) ? 'is-invalid' : ''; ?>" id="kelurahan" placeholder="Kelurahan" name="kelurahan" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelurahan'); ?>
                                </div>
                                <label for="kelurahan">Kelurahan</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('kode_pos')) ? 'is-invalid' : ''; ?>" id="kode_pos" placeholder="Kode Pos" name="kode_pos" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kode_pos'); ?>
                                </div>
                                <label for="kode_pos">Kode Pos</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('rtrw')) ? 'is-invalid' : ''; ?>" id="rtrw" placeholder="RT/RW" name="rtrw" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('rtrw'); ?>
                                </div>
                                <label for="rtrw">RT/RW</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('nama_usaha')) ? 'is-invalid' : ''; ?>" id="nama_usaha" placeholder="Nama Usaha" name="nama_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_usaha'); ?>
                                </div>
                                <label for="nama_usaha">Nama Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('bentuk_usaha')) ? 'is-invalid' : ''; ?>" id="bentuk_usaha" placeholder="Bentuk Usaha" name="bentuk_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('bentuk_usaha'); ?>
                                </div>
                                <label for="bentuk_usaha">Bentuk Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('sektor_usaha')) ? 'is-invalid' : ''; ?>" id="sektor_usaha" placeholder="Sektor Usaha" name="sektor_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('sektor_usaha'); ?>
                                </div>
                                <label for="sektor_usaha">Sektor Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('deskripsi_usaha')) ? 'is-invalid' : ''; ?>" id="deskripsi_usaha" placeholder="Deskripsi Usaha" name="deskripsi_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('deskripsi_usaha'); ?>
                                </div>
                                <label for="deskripsi_usaha">Deskripsi Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('wilayah_usaha')) ? 'is-invalid' : ''; ?>" id="wilayah_usaha" placeholder="Wilayah Usaha" name="wilayah_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('wilayah_usaha'); ?>
                                </div>
                                <label for="wilayah_usaha">Wilayah Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('tahun_berdiri')) ? 'is-invalid' : ''; ?>" id="tahun_berdiri" placeholder="Tahun Berdiri" name="tahun_berdiri" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tahun_berdiri'); ?>
                                </div>
                                <label for="tahun_berdiri">Tahun Berdiri</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('no_telp_usaha')) ? 'is-invalid' : ''; ?>" id="no_telp_usaha" placeholder="Nomor Telepon Usaha" name="no_telp_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_telp_usaha'); ?>
                                </div>
                                <label for="no_telp_usaha">Nomor Telepon Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('email_usaha')) ? 'is-invalid' : ''; ?>" id="email_usaha" placeholder="E-mail Usaha" name="email_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email_usaha'); ?>
                                </div>
                                <label for="email_usaha">E-mail Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('nib')) ? 'is-invalid' : ''; ?>" id="nib" placeholder="Nomor izin Berusaha (NIB)" name="nib" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nib'); ?>
                                </div>
                                <label for="nib">Nomor izin Berusaha (NIB)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('npwp')) ? 'is-invalid' : ''; ?>" id="npwp" placeholder="Nomor Pokok Wajib Pajak (NPWP)" name="npwp" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('npwp'); ?>
                                </div>
                                <label for="npwp">Nomor Pokok Wajib Pajak (NPWP)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('izin_usaha')) ? 'is-invalid' : ''; ?>" id="izin_usaha" placeholder="Izin Berusaha" name="izin_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('izin_usaha'); ?>
                                </div>
                                <label for="izin_usaha">Izin Berusaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('omzet')) ? 'is-invalid' : ''; ?>" id="omzet" placeholder="Alamat Usaha" name="omzet" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('omzet'); ?>
                                </div>
                                <label for="omzet">Omzet Pertahun</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('alamat_usaha')) ? 'is-invalid' : ''; ?>" id="alamat_usaha" placeholder="Omzet Pertahun" name="alamat_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat_usaha'); ?>
                                </div>
                                <label for="alamat_usaha">Alamat Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('provinsi_usaha')) ? 'is-invalid' : ''; ?>" id="provinsi_usaha" placeholder="Provinsi Usaha" name="provinsi_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('provinsi_usaha'); ?>
                                </div>
                                <label for="provinsi_usaha">Provinsi Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten_usaha')) ? 'is-invalid' : ''; ?>" id="kabupaten_usaha" placeholder="Kabupaten Usaha" name="kabupaten_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kabupaten_usaha'); ?>
                                </div>
                                <label for="kabupaten_usaha">Kabupaten Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan_usaha')) ? 'is-invalid' : ''; ?>" id="kecamatan_usaha" placeholder="Kecamatan Usaha" name="kecamatan_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kecamatan_usaha'); ?>
                                </div>
                                <label for="kecamatan_usaha">Kecamatan Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('kelurahan_usaha')) ? 'is-invalid' : ''; ?>" id="kelurahan_usaha" placeholder="Kelurahan Usaha" name="kelurahan_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelurahan_usaha'); ?>
                                </div>
                                <label for="kelurahan_usaha">Kelurahan Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('kode_pos_usaha')) ? 'is-invalid' : ''; ?>" id="kode_pos_usaha" placeholder="Kode Pos Usaha" name="kode_pos_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kode_pos_usaha'); ?>
                                </div>
                                <label for="kode_pos_usaha">Kode Pos Usaha</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control <?= ($validation->hasError('rtrw_usaha')) ? 'is-invalid' : ''; ?>" id="rtrw_usaha" placeholder="RT/RW Usaha" name="rtrw_usaha" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('rtrw_usaha'); ?>
                                </div>
                                <label for="rtrw_usaha">RT/RW Usaha</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Daftar Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?= $this->include('front/template/bot'); ?>