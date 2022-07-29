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
                                    <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama_lengkap" autofocus value="<?= (old('nama_lengkap')) ? old('nama_lengkap') : $daftar['nama_lengkap'] ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('nama_lengkap'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Nomor KTP</label>
                                    <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" value="<?= (old('nomor_ktp')) ? old('nomor_ktp') : $daftar['nomor_ktp']; ?>">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Tempat Tanggal Lahir</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">No Telepon</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">E-Mail</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Pendidikan Terakhir</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Provinsi</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kabupaten</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kecamatan</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kelurahan</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kode Pos</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">RT/RW</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Nama Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Bentuk Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Sektor Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Deskripsi Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Wilayah Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">NIB</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">NPWP</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Izin Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Omzet</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Alamat Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Provinsi Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kabupaten Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kecamatan Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">Kode Pos Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <label for="">RT/RW Usaha</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                            </div>
                        </form>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- <a href="/daftar/edit/<?= $daftar['slug']; ?>" class="btn btn-warning">Edit</a> -->

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