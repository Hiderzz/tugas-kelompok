<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title><?= $title ?? 'Layouting' ?></title>
</head>

<body>
<body>
    <!-- ✅ HEADER -->
    <div class="header">
        <div class="navbar">

            <!-- Logo user di kiri -->
            <div class="navbar-logo">
                <i class="fa-solid fa-user-circle"></i>
            </div>

            <!-- Menu navigasi di tengah -->
            <div class="navbar-page">
                <ul>
                    <li><a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="<?= base_url('/about') ?>"><i class="fa-solid fa-user"></i> About Us</a></li>
                    <li><a href="<?= base_url('/portfolio') ?>"><i class="fa-solid fa-briefcase"></i> Portfolio</a></li>
                    <li><a href="<?= base_url('/contact') ?>"><i class="fa-solid fa-envelope"></i> Contact</a></li>
                </ul>
            </div>

            <!-- Sosial Media di kanan -->
            <div class="navbar-sosmed">
                <ul>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- ✅ MAIN SECTION -->
    <div class="main">
        <h1 class="name">Wicaksono Ali Ramdani</h1>
        <p class="description">
            Mahasiswa lulusan Teknik Informatika jurusan Teknik Informatika angkatan 2023
        </p>
    </div>

    <!-- ✅ Konten halaman -->
    <?= $this->renderSection('content') ?>
</body>
</html>
