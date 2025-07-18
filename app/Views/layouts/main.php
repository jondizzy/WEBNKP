<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Halaman') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@10/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@10/swiper-bundle.min.js" defer></script>
</head>

<body>

    <!-- HEADER -->
    <header class="site-header">
        <div class="container header-container">
            <div class="logo-wrapper">
                <img src="<?= base_url('images/logo.jpg') ?>" alt="Logo" class="logo-img">
            </div>
            <nav class="main-nav">
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="<?= base_url('/about') ?>">About</a>
                <a href="<?= base_url('/product') ?>">Product</a>
                <a href="<?= base_url('/client') ?>">Client</a>
                <a href="<?= base_url('/contact') ?>">Contact</a>
                <a href="<?= base_url('/news') ?>">News</a>
                <a href="https://wa.me/6281321693363" class="wa-icon" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </nav>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="main-content container">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2025 PT. Nusamas Kimia Persada<br>
                Hak cipta dilindungi undang-undang.</p>
        </div>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.mySwiper', {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    480: {
                        slidesPerView: 1
                    }
                }
            });
        });
    </script>

</body>

</html>