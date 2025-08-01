<?= $this->extend('layout/templatee') ?>
<?= $this->section('content') ?>

<h2>Daftar Produk</h2>
<a href="<?= base_url('toko/tambah') ?>">+ Tambah Produk</a>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produk as $p): ?>
        <tr>
            <td><?= esc($p['nama']) ?></td>
            <td><?= esc($p['harga']) ?></td>
            <td><?= esc($p['stok']) ?></td>
            <td><?= esc($p['kategori']) ?></td>
            <td>
            <a href="http://localhost:8081/toko/edit/<?= $p['id'] ?>">Edit</a> |
<a href="http://localhost:8081/toko/delete/<?= $p['id'] ?>" onclick="return confirm('Hapus data ini?')">Delete</a>

            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>
