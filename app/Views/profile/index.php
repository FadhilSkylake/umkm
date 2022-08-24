<?= $this->include('layout/topbar'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Kegiatan UMKM
            </h6>
        </div>
        <div class="card-body">
            <form action="/kelola/update/<?= $user['id'] ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="col-12">
                    <div class="form-floating">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" autofocus value="<?= $umkm['username']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap" name="namalengkap" autofocus value="<?= $umkm['namalengkap']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="nomor_ktp">Nomor KTP</label>
                        <input type="text" class="form-control" id="nomor_ktp" placeholder="Nama Usaha" name="nomor_ktp" autofocus value="<?= $umkm['nomor_ktp']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="ttl">Tempat Tanggal Lahir</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="ttl" placeholder="Tempat Tanggal Lahir" name="ttl" autofocus value="<?= $umkm['ttl']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="no_telp" placeholder="Nomor Telepon" name="no_telp" autofocus value="<?= $umkm['no_telp']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="email">E-Mail</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="email" placeholder="E-Mail" name="email" autofocus value="<?= $umkm['email']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="pendidikan">Pendidikan Terakhir</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="pendidikan" placeholder="Pendidikan Terakhir" name="pendidikan" autofocus value="<?= $umkm['pendidikan']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="alamat">Alamat</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" autofocus value="<?= $umkm['alamat']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="provinsi">Provinsi</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi" autofocus value="<?= $umkm['provinsi']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="kabupaten">Kabupaten</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten" name="kabupaten" autofocus value="<?= $umkm['kabupaten']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" name="kecamatan" autofocus value="<?= $umkm['kecamatan']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan" name="kelurahan" autofocus value="<?= $umkm['kelurahan']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="kode_pos" placeholder="Kode Pos" name="kode_pos" autofocus value="<?= $umkm['kode_pos']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="rtrw">RT/RW</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="rtrw" placeholder="RT/RW" name="rtrw" autofocus value="<?= $umkm['rtrw']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="nama_usaha">Nama Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="nama_usaha" placeholder="Nama Usaha" name="nama_usaha" autofocus value="<?= $umkm['nama_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="bentuk_usaha">Bentuk Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="bentuk_usaha" placeholder="Bentuk Usaha" name="bentuk_usaha" autofocus value="<?= $umkm['bentuk_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="sektor_usaha">Sektor Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="sektor_usaha" placeholder="Sektor Usaha" name="sektor_usaha" autofocus value="<?= $umkm['sektor_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="deskripsi_usaha">Deskripsi Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="deskripsi_usaha" placeholder="Deskripsi Usaha" name="deskripsi_usaha" autofocus value="<?= $umkm['deskripsi_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="wilayah_usaha">Wilayah Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="wilayah_usaha" placeholder="Wilayah Usaha" name="wilayah_usaha" autofocus value="<?= $umkm['wilayah_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="tahun_berdiri">Tahun Berdiri</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri" name="tahun_berdiri" autofocus value="<?= $umkm['tahun_berdiri']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="no_telp_usaha">Nomor Telepon Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="no_telp_usaha" placeholder="Nomor Telepon Usaha" name="no_telp_usaha" autofocus value="<?= $umkm['no_telp_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="email_usaha">E-Mail Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="email_usaha" placeholder="E-Mail Usaha" name="email_usaha" autofocus value="<?= $umkm['email_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <label for="nib">NIB</label>
                                <input type="hidden" name="slug" value="">
                                <input type="text" class="form-control" id="nib" placeholder="NIB" name="nib" autofocus value="<?= $umkm['nib']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="nib">Foto NIB</label>
                            <input type="file" class="form-control" id="nib_img" placeholder="NIB" name="nib_img" autofocus value="<?= $umkm['nib_img']; ?>">

                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="npwp">NPWP</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="npwp" placeholder="NPWP" name="npwp" autofocus value="<?= $umkm['npwp']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="izin_usaha">Izin Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="izin_usaha" placeholder="Izin Usaha" name="izin_usaha" autofocus value="<?= $umkm['izin_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="omzet">Omzet</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="omzet" placeholder="Omzet" name="omzet" autofocus value="<?= $umkm['omzet']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="alamat_usaha">Alamat Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="alamat_usaha" placeholder="Alamat Usaha" name="alamat_usaha" autofocus value="<?= $umkm['alamat_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="provinsi_usaha">Provinsi Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="provinsi_usaha" placeholder="Provinsi Usaha" name="provinsi_usaha" autofocus value="<?= $umkm['provinsi_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="kabupaten_usaha">Kabupaten Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="kabupaten_usaha" placeholder="Kabupaten Usaha" name="kabupaten_usaha" autofocus value="<?= $umkm['kabupaten_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="kecamatan_usaha">Kecamatan Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="kecamatan_usaha" placeholder="Kecamatan Usaha" name="kecamatan_usaha" autofocus value="<?= $umkm['kecamatan_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="kelurahan_usaha">Kelurahan Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="kelurahan_usaha" placeholder="Kelurahan Usaha" name="kelurahan_usaha" autofocus value="<?= $umkm['kelurahan_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="kode_pos_usaha">Kode Pos Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="kode_pos_usaha" placeholder="Kode Pos Usaha" name="kode_pos_usaha" autofocus value="<?= $umkm['kode_pos_usaha']; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <label for="rtrw_usaha">RT/RW Usaha</label>
                        <input type="hidden" name="slug" value="">
                        <input type="text" class="form-control" id="rtrw_usaha" placeholder="RT/RW Usaha" name="rtrw_usaha" autofocus value="<?= $umkm['rtrw_usaha']; ?>">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-warning">Update Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>