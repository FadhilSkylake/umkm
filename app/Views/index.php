<?= $this->include('layout/topbar'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Data UMKM
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Nama Lengkap </th>
                            <th> nama usaha </th>
                            <th> Sektor Usaha </th>
                            <th> no telepon </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($daftar as $d) : ?>
                        <tr>
                            <td> <?= $i++; ?> </td>
                            <td> <?= $d['nama_lengkap']; ?> </td>
                            <td> <?= $d['nama_usaha']; ?> </td>
                            <td> <?= $d['sektor_usaha']; ?></td>
                            <td> <?= $d['no_telp_usaha']; ?> </td>
                            <td>
                                <a href="/daftar/<?= $d['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>