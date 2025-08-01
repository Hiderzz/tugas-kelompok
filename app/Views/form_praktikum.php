<!DOCTYPE html>
<html>
<head>
    <title>Form Praktikum</title>
</head>
<body>
    <h2>Form Data Praktikum</h2>
    <form action="/submit-praktikum" method="post">
        <?= csrf_field() ?>

        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas"><br><br>

        <label>Mata Kuliah:</label><br>
        <input type="text" name="mata_kuliah"><br><br>

        <label>Dosen Pengampu:</label><br>
        <input type="text" name="dosen_pengampu"><br><br>

        <label>Asisten Praktikum:</label><br>
        <input type="text" name="asisten_praktikum"><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
