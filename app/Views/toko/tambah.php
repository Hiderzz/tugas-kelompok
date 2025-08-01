<?= $this->extend('layout/templatee') ?>
<?= $this->section('content') ?>

<h2>Tambah Produk</h2>
<form action="<?= base_url('toko/simpan') ?>" method="post">
    <label>Nama</label><br>
    <input type="text" name="nama" required><br>

    <label>Harga</label><br>
    <input type="number" name="harga" required><br>

    <label>Stok</label><br>
    <input type="number" name="stok" required><br>

    <label>Kategori</label><br>
    <input type="text" name="kategori" required><br><br>

    <button type="submit">Simpan</button>
</form>

<?= $this->endSection() ?>
