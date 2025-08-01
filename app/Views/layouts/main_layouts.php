<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Halaman Saya') ?></title>
    <link rel="stylesheet" href="/assets/css/style1.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <h1>Website Saya</h1>
    </header>

    <!-- Navigasi -->
    <nav class="navbar">
    <a href="http://localhost:8081/profil"><i class="fa-solid fa-user"></i> Profil</a>
    <a href="http://localhost:8081/skill"><i class="fa-solid fa-code"></i> Skill</a>
</nav>


    <!-- Konten -->
    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        &copy; <?= date('Y') ?> Wicaksono Ali Ramdani
    </footer>

    <!-- Scripts tambahan -->
    <?= $this->renderSection('scripts') ?>
</body>
</html>
