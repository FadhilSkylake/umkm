<div class="col-md-8">
    <div class="card-body">
        <p class="card-text">Nama Lengkap : <?= $daftar['nama_lengkap']; ?></p>
        <p class="card-text">nomor ktp : <?= $daftar['nomor_ktp']; ?></p>
        <p class="card-text">ttl : <?= $daftar['ttl']; ?></p>
        <p class="card-text">No Telepon : <?= $daftar['no_telp']; ?></p>
        <p class="card-text">email : <?= $daftar['email']; ?></p>
        <p class="card-text">pendidikan : <?= $daftar['pendidikan']; ?></p>


        <a href="/pendaftaran/edit/<?= $daftar['slug']; ?>" class="btn btn-warning">Edit</a>

        <form action="/pendaftaran/<?= $daftar['id']; ?>" method="post" class="d-inline">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
        </form>

        <br><br>
        <a href="/pendaftaran">Kembali</a>
    </div>
</div>