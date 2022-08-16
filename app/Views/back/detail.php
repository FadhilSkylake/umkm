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
                    <div class="card-body">
                        <table class="table1 table">
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>: <?= $daftar['namalengkap']; ?></td>
                            </tr>
                            <tr>
                                <td>Nomor KTP</td>
                                <td>: <?= $daftar['nomor_ktp']; ?></td>
                            </tr>
                            <tr>
                                <td>Tempat Tanggal Lahir</td>
                                <td>: <?= $daftar['ttl']; ?></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td>: <?= $daftar['no_telp']; ?></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>: <?= $daftar['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Terakhir</td>
                                <td>: <?= $daftar['pendidikan']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?= $daftar['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>: <?= $daftar['provinsi']; ?></td>
                            </tr>
                            <tr>
                                <td>Kabupaten</td>
                                <td>: <?= $daftar['kabupaten']; ?></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>: <?= $daftar['kecamatan']; ?></td>
                            </tr>
                            <tr>
                                <td>Kelurahan</td>
                                <td>: <?= $daftar['kelurahan']; ?></td>
                            </tr>
                            <tr>
                                <td>Kode Pos</td>
                                <td>: <?= $daftar['kode_pos']; ?></td>
                            </tr>
                            <tr>
                                <td>RT/RW</td>
                                <td>: <?= $daftar['rtrw']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Usaha</td>
                                <td>: <?= $daftar['nama_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Bentuk Usaha</td>
                                <td>: <?= $daftar['bentuk_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Sektor Usaha</td>
                                <td>: <?= $daftar['sektor_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi Usaha</td>
                                <td>: <?= $daftar['deskripsi_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Wilayah Usaha</td>
                                <td>: <?= $daftar['wilayah_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>NIB</td>
                                <td>: <?= $daftar['nib']; ?></td>
                            </tr>
                            <tr>
                                <td>NPWP</td>
                                <td>: <?= $daftar['npwp']; ?></td>
                            </tr>
                            <tr>
                                <td>Izin Usaha</td>
                                <td>: <?= $daftar['izin_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Omzet</td>
                                <td>: Rp. <?= $daftar['omzet']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat Usaha</td>
                                <td>: <?= $daftar['alamat_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Provinsi Usaha</td>
                                <td>: <?= $daftar['provinsi_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Kabupaten Usaha</td>
                                <td>: <?= $daftar['kabupaten_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Kecamatan Usaha</td>
                                <td>: <?= $daftar['kecamatan_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Kelurahan Usaha</td>
                                <td>: <?= $daftar['kelurahan_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>Kode Pos Usaha</td>
                                <td>: <?= $daftar['kode_pos_usaha']; ?></td>
                            </tr>
                            <tr>
                                <td>RT/RW Usaha</td>
                                <td>: <?= $daftar['rtrw_usaha']; ?></td>
                            </tr>
                        </table>
                        <a href="/daftar/edit/<?= $daftar['slug']; ?>" class="btn btn-warning">Edit</a>

                        <form action="/daftar/<?= $daftar['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
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