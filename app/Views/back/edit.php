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
                        <form class="user" action="/daftar/update/<?= $daftar['id']; ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-lg-10 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                </div>
                            </div>
                        </form>
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