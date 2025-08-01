<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h2>Daftar Mahasiswa</h2>
<a href="http://localhost:8081/crud/tambah" class="btn-link">+ Tambah Mahasiswa</a>

<table class="data-table">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Universitas</th>
            <th>Nomor HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['nim'] ?></td>
                <td><?= $m['nama'] ?></td>
                <td><?= $m['prodi'] ?></td>
                <td><?= $m['universitas'] ?></td>
                <td><?= $m['nomor_handphone'] ?></td>
                <td>
                <a href="http://localhost:8081/crud/edit/<?= $m['nim'] ?>">Edit</a> | 
                <a href="http://localhost:8081/crud/delete/<?= $m['nim'] ?>" onclick="return confirm('Hapus data?')">Delete</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>