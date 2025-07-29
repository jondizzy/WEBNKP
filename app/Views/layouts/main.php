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
                <img src="<?= base_url('images/logo.jpg') ?>" alt="Logo" class="logo-img" style="height: 100px;">
            </div>
            <nav class="main-nav">
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="<?= base_url('/aboutUs') ?>">About</a>
                <a href="<?= base_url('/ProductCategory') ?>">Product</a>
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
    <?= $this->renderSection('hero') ?> <!-- khusus video -->
    <main class="main-content container-fluid p-0 m-0">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="site-footer-container">
            <!--Address section-->
            <div class="footer-address">
                <h3>Nusamas Kimia Persada</h3>
                <p>
                    BSD Junction, Jl. Pahlawan Seribu No.48A Blok A, BSD City,<br>
                    Kec. Serpong, Kota Tangerang Selatan, Jawa Barat 15322
                </p>
            </div>

            <!--Explore section-->
            <div class="footer-explore">
                <h3>Explore</h3>
                <ul>
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li><a href="<?= base_url('/aboutUs') ?>">About</a></li>
                    <li><a href="<?= base_url('/ProductCategory') ?>">Product</a></li>
                    <li><a href="<?= base_url('/client') ?>">Client</a></li>
                    <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                    <li><a href="<?= base_url('/news') ?>">News</a></li>
                    </ul>
            </div>
        </div>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.mySwiper', {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 3000, // geser otomatis setiap 3 detik
                    disableOnInteraction: false, // tetap autoplay meski user klik
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    480: {
                        slidesPerView: 1,
                    }
                }
            });
        });
    </script>

</body>

</html>