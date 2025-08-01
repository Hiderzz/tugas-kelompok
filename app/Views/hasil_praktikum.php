<!DOCTYPE html>
<html>
<head>
    <title>Hasil Praktikum</title>
</head>
<body>
    <h2>Data Praktikum</h2>
    <ul>
        <li>Nama: <?= esc($data['nama']) ?></li>
        <li>NIM: <?= esc($data['nim']) ?></li>
        <li>Kelas: <?= esc($data['kelas']) ?></li>
        <li>Mata Kuliah: <?= esc($data['mata_kuliah']) ?></li>
        <li>Dosen Pengampu: <?= esc($data['dosen_pengampu']) ?></li>
        <li>Asisten Praktikum: <?= esc($data['asisten_praktikum']) ?></li>
    </ul>
</body>
</html>
