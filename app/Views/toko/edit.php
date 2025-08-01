<?= $this->extend('layout/templatee') ?>
<?= $this->section('content') ?>

<h2>Edit Produk</h2>
<form action="<?= base_url('toko/update/' . $produk['id']) ?>" method="post">
    <label>Nama</label><br>
    <input type="text" name="nama" value="<?= esc($produk['nama']) ?>" required><br>

    <label>Harga</label><br>
    <input type="number" name="harga" value="<?= esc($produk['harga']) ?>" required><br>

    <label>Stok</label><br>
    <input type="number" name="stok" value="<?= esc($produk['stok']) ?>" required><br>

    <label>Kategori</label><br>
    <input type="text" name="kategori" value="<?= esc($produk['kategori']) ?>" required><br><br>

    <button type="submit">Update</button>
</form>

<?= $this->endSection() ?>
