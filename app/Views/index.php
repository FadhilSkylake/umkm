<table>
    <thead>
        <tr>
            <th> No </th>
            <th> Nama Lengkap </th>
            <th> nama usaha </th>
            <th> no telepon </th>
        </tr>
    </thead>
    <?php $i = 1; ?>
    <?php foreach ($daftar as $d) : ?>
        <tr>
            <td> <?= $i++; ?> </td>
            <td> <?= $d['nama_lengkap']; ?> </td>
            <td> <?= $d['nama_usaha']; ?> </td>
            <td> <?= $d['no_telp_usaha']; ?> </td>
            <td>
                <a href="/daftar/<?= $d['slug']; ?>" class="btn btn-success">Detail</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>