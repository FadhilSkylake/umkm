<?= $this->include('layout/topbar'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Kegiatan UMKM
            </h6>
            <div>
                <a href="/kegiatan/create" class=" btn btn-primary mt-3" id="exampleModal">Tambah Data Kegiatan</a>
            </div>
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
                    <?php foreach ($kegiatan as $k) : ?>
                        <tr>
                            <td> <?= $i++; ?> </td>
                            <td> <?= $k['nama_kegiatan']; ?> </td>
                            <td> <?= $k['deskripsi']; ?> </td>
                            <td> <?= $k['tempat_kegiatan']; ?></td>
                            <td> <?= $k['waktu_kegiatan']; ?> </td>
                            <td> <?= $k['waktu_dibuat']; ?> </td>
                            <td> <img class="circular--landscape" src="/img/<?= $k['dokumentasi']; ?>"> </td>
                            <td>
                                <a href="/kegiatan/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>