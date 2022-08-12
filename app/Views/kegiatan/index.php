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
                            <th> Nama Kegiatan </th>
                            <th> Deskripsi </th>
                            <th> Tempat Kegiatan </th>
                            <th> Waktu Kegiatan </th>
                            <th> Waktu Dibuat </th>
                            <th> Dokumentasi </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($kegiatan as $d) : ?>
                        <tr>
                            <td> <?= $i++; ?> </td>
                            <td> <?= $d['nama_kegiatan']; ?> </td>
                            <td> <?= $d['deskripsi']; ?> </td>
                            <td> <?= $d['tematp_kegiatan']; ?></td>
                            <td> <?= $d['waktu_kegiatan']; ?> </td>
                            <td> <?= $d['waktu_dibuat']; ?> </td>
                            <td> <?= $d['dokumentasi']; ?> </td>
                            <td>
                                <a href="/kegiatan/<?= $d['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>