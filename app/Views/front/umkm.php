<?= $this->include('front/template/top'); ?>

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
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($daftar as $d) : ?>
                        <tr>
                            <td> <?= $i++; ?> </td>
                            <td> <?= $d['namalengkap']; ?> </td>
                            <td> <?= $d['nama_usaha']; ?> </td>
                            <td> <?= $d['sektor_usaha']; ?></td>
                            <td> <?= $d['no_telp_usaha']; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->include('front/template/bot'); ?>