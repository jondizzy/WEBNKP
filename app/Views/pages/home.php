<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    html,
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .banner-swiper-section {
        width: 100%;
        height: 500px;
        margin-bottom: 4rem;
        border: none;
        position: relative;
        overflow: hidden;
    }

    .banner-swiper-section .swiper-slide {
        width: 100%;
        height: 100%;
    }

    .banner-swiper-section .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .hero-section {
        position: relative;
        width: 100%;
        height: 70vh;
        margin-top: 5rem;
        background-color: black;
        overflow: hidden;
        border: none;
    }

    .hero-section video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    .video-overlay {
        position: relative;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.4);
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .hero-content h1 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .hero-content p {
        font-size: 1rem;
    }

    .background-video.mobile {
        display: none;
    }

    @media (max-width: 768px) {
        .banner-swiper-section {
            height: 250px;
        }

        .hero-section {
            height: 50vh;
        }

        .hero-content h1 {
            font-size: 1.5rem;
        }

        .hero-content p {
            font-size: 0.9rem;
        }

        .hero-section video {
            object-fit: contain;
        }

        .background-video.desktop {
            display: none;
        }

        .background-video.mobile {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
    }

    @media (max-width: 480px) {
        .hero-content h1 {
            font-size: 1.2rem;
        }

        .hero-content p {
            font-size: 0.8rem;
        }
    }

    .banner-swiper-section .swiper-button-next,
    .banner-swiper-section .swiper-button-prev {
        color: #007bff;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        transition: background-color 0.3s ease;
    }

    .banner-swiper-section .swiper-button-next::after,
    .banner-swiper-section .swiper-button-prev::after {
        font-size: 24px;
    }

    .banner-swiper-section .swiper-button-next:hover,
    .banner-swiper-section .swiper-button-prev:hover {
        background-color: #007bff;
        color: white;
    }

    .banner-swiper-section .swiper-pagination {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 15px;
        z-index: 10;
    }

    .banner-swiper-section .swiper {
        width: 100%;
        height: 100%;
        position: relative;
    }
</style>

<?= $this->section('hero') ?>
<!-- BANNER IMAGE SECTION -->
<section class="banner-swiper-section">
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?= base_url('images/banner/banner 4.jpg') ?>" class="banner-img" alt="Banner 1">
            </div>
            <div class="swiper-slide">
                <img src="<?= base_url('images/banner/banner 5.jpg') ?>" class="banner-img" alt="Banner 2">
            </div>
            <div class="swiper-slide">
                <img src="<?= base_url('images/banner/banner 3.jpg') ?>" class="banner-img" alt="Banner 3">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<script>
    var swiper = new Swiper('.bannerSwiper', {
        loop: true,
        pagination: {
            el: '.bannerSwiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.bannerSwiper .swiper-button-next',
            prevEl: '.bannerSwiper .swiper-button-prev',
        },
    });
</script>

<!-- VIDEO SECTION -->
<section class="hero-section">
    <video class="background-video" autoplay muted loop playsinline preload="auto">
        <source src="<?= base_url('videos/company-profile.mp4') ?>" type="video/mp4">
    </video>
    <div class="video-overlay">
        <div class="hero-content">
            <h1>Selamat Datang di PT Nusamas Kimia Persada</h1>
            <p>Solusi kimia terpercaya untuk kebutuhan industri Anda.</p>
        </div>
    </div>
</section>
<script>
    const videoSource = document.getElementById('videoSource');
    const heroVideo = document.getElementById('heroVideo');

    if (window.innerWidth <= 768) {
        videoSource.src = "<?= base_url('videos/company-profile-mobile.mp4') ?>";
        heroVideo.load();
    }
</script>
<?= $this->endSection() ?>


<!-- Diatas Bagian Produk -->
<section class="background-wrapper">
    <section class="highlight-section">
        <div class="container">
            <div class="highlight-grid">
                <div class="highlight-item">
                    <h2>73</h2>
                    <p>Tahun Berdiri</p>
                </div>
                <div class="highlight-item">
                    <h2>50+</h2>
                    <p>Produk</p>
                </div>
                <div class="highlight-item">
                    <h2>3</h2>
                    <p>Segmen Bisnis</p>
                </div>
                <div class="highlight-item">
                    <h2>100+</h2>
                    <p>Pemasok</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Bagian Produk -->
    <section class="product-slider-section">
        <h2>Produk Kami</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="product-card">
                        <a href="<?= base_url('/product/detail/1') ?>">
                            <div class="product-image-wrapper">
                                <img src="<?= base_url('images/Product1.jpg') ?>" alt="Produk 1" class="product-img">
                            </div>
                            <h3 class="product-title">Nama Produk 1</h3>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <a href="<?= base_url('/product/detail/2') ?>">
                            <div class="product-image-wrapper">
                                <img src="<?= base_url('images/Product2.jpg') ?>" alt="Produk 2" class="product-img">
                            </div>
                            <h3 class="product-title">Nama Produk 2</h3>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <a href="<?= base_url('/product/detail/3') ?>">
                            <div class="product-image-wrapper">
                                <img src="<?= base_url('images/Product3.png') ?>" alt="Produk 3" class="product-img">
                            </div>
                            <h3 class="product-title">Nama Produk 3</h3>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <a href="<?= base_url('/product/detail/3') ?>">
                            <div class="product-image-wrapper">
                                <img src="<?= base_url('images/Product4.jpg') ?>" alt="Produk 3" class="product-img">
                            </div>
                            <h3 class="product-title">Nama Produk 4</h3>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <a href="<?= base_url('/product/detail/3') ?>">
                            <div class="product-image-wrapper">
                                <img src="<?= base_url('images/Product5.jpg') ?>" alt="Produk 3" class="product-img">
                            </div>
                            <h3 class="product-title">Nama Produk 5</h3>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="product-card">
                        <a href="<?= base_url('/product/detail/3') ?>">
                            <div class="product-image-wrapper">
                                <img src="<?= base_url('images/Product6.jpg') ?>" alt="Produk 3" class="product-img">
                            </div>
                            <h3 class="product-title">Nama Produk 6</h3>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Navigasi Panah -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <style>
        .background-wrapper {
            background: linear-gradient(rgba(0, 34, 85, 0.8), rgba(0, 34, 85, 0.8)),
                url('<?= base_url('images/tetes.jpg') ?>') center/cover no-repeat;
            color: #fff;
        }

        .highlight-section {
            padding: 60px 0 20px 0;
            text-align: center;
            margin-bottom: 0;
        }

        .highlight-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .highlight-item {
            flex: 1 1 200px;
            max-width: 200px;
        }

        .highlight-item h2 {
            font-size: 48px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .highlight-item p {
            font-size: 18px;
            margin: 0;
        }

        .product-slider-section {
            padding-top: 10px;
            margin-top: 0;
            background: transparent;
            border-top: none;
        }

        .product-slider-section h2 {
            color: #fff;
            font-size: 32px;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .product-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            text-align: center;
            padding: 10px;
        }

        .product-image-wrapper {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-title {
            color: #000;
            font-size: 16px;
            margin-top: 10px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .highlight-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
                text-align: center;
            }

            .highlight-item h2 {
                font-size: 36px;
            }

            .highlight-item p {
                font-size: 16px;
            }

            .product-slider-section h2 {
                font-size: 24px;
            }

            .product-card {
                width: 90%;
                margin: 0 auto;
            }

            .product-image-wrapper {
                height: 160px;
            }

            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .highlight-item h2 {
                font-size: 28px;
            }

            .highlight-item p {
                font-size: 14px;
            }

            .product-slider-section h2 {
                font-size: 20px;
            }

            .product-image-wrapper {
                height: 140px;
            }
        }
    </style>


</section>



<!-- Bagian Achievement -->
<section class="achievement-section">
    <div class="achievement-container">
        <div class="achievement-text">
            <h1>Pencapaian</h1>
            <h2>PT Nusamas Kimia Persada</h2>
            <p>
                Sebagai Supplier, Importir, dan Distributor Bahan Kimia terkemuka di Indonesia,
                kami telah meraih berbagai pencapaian luar biasa.
            </p>
        </div>
        <div class="achievement-image">
            <img src="<?= base_url('images/achievement/achievement-1.jpg') ?>" alt="Achievement" />
        </div>
    </div>
</section>

<!-- Style Achievement -->
<style>
    .achievement-section {
        padding: 60px 20px;
        background-color: #f7f9fc;
    }

    .achievement-container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        max-width: 1100px;
        margin: 0 auto;
        gap: 40px;
    }

    .achievement-text {
        flex: 1 1 50%;
        min-width: 300px;
    }

    .achievement-text h1 {
        color: #0033cc;
        font-size: 36px;
        margin-bottom: 10px;
    }

    .achievement-text h2 {
        font-size: 24px;
        color: #555;
        margin-bottom: 20px;
    }

    .achievement-text p {
        font-size: 18px;
        line-height: 1.6;
        color: #333;
    }

    .achievement-image {
        flex: 1 1 40%;
        min-width: 280px;
        display: flex;
        justify-content: center;
    }

    .achievement-image img {
        width: 100%;
        max-width: 400px;
        height: auto;
        border-radius: 12px;
        object-fit: cover;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .achievement-container {
            flex-direction: column;
            text-align: center;
        }

        .achievement-image {
            margin-top: 20px;
        }

        .achievement-text h1 {
            font-size: 28px;
        }

        .achievement-text h2 {
            font-size: 20px;
        }

        .achievement-text p {
            font-size: 16px;
        }

        .achievement-image img {
            max-width: 300px;
        }
    }
</style>

<!-- Bagian Mengapa Memilih Kami -->
<section class="why-choose-us">
    <div class="why-container">
        <div class="why-text">
            <h2><span>Mengapa</span> Memilih Kami?</h2>
            <p>
                PT Nusamas Kimia Persada berkomitmen penuh untuk memenuhi setiap kebutuhan Anda
                dalam produk bahan kimia, mulai dari pencampuran, pengemasan hingga pengiriman.
            </p>
            <p>Keunggulan kami meliputi:</p>
            <a href="<?= base_url('/about') ?>" class="about-btn">Tentang Kami</a>
        </div>

        <div class="why-features">
            <div class="feature-card purple">
                <div class="icon"><i class="fas fa-shipping-fast"></i></div>
                <span>Jaringan Distribusi Andal</span>
            </div>
            <div class="feature-card pink">
                <div class="icon"><i class="fas fa-handshake"></i></div>
                <span>Kemitraan Global</span>
            </div>
            <div class="feature-card green">
                <div class="icon"><i class="fas fa-user-tie"></i></div>
                <span>Keahlian Industri</span>
            </div>
            <div class="feature-card blue">
                <div class="icon"><i class="fas fa-certificate"></i></div>
                <span>Jaminan Kualitas</span>
            </div>
            <div class="feature-card yellow">
                <div class="icon"><i class="fas fa-leaf"></i></div>
                <span>Komitmen Keberlanjutan</span>
            </div>
        </div>
    </div>
</section>

<!-- Style Mengapa Memilih Kami -->
<style>
    .why-choose-us {
        background: #ffffff;
        padding: 60px 20px;
    }

    .why-container {
        max-width: 1200px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        align-items: flex-start;
    }

    .why-text {
        flex: 1;
        min-width: 300px;
    }

    .why-text h2 {
        font-size: 36px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .why-text span {
        color: #0033cc;
    }

    .why-text p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 16px;
        color: #444;
    }

    .about-btn {
        display: inline-block;
        padding: 12px 24px;
        background-color: #0033cc;
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .about-btn:hover {
        background-color: #001f99;
    }

    .why-features {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
    }

    .feature-card {
        background-color: #f2f2f2;
        padding: 16px;
        border-radius: 16px;
        text-align: center;
        font-weight: 600;
        color: #333;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 140px;
    }


    .feature-card:hover {
        transform: translateY(-5px);
    }

    .feature-card .icon {
        font-size: 1.6rem;
        margin-bottom: 10px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        padding: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feature-card.purple {
        background-color: #ebe6fc;
        color: #4b2995;
    }

    .feature-card.pink {
        background-color: #ffe5ec;
        color: #b2004d;
    }

    .feature-card.green {
        background-color: #d9f5e4;
        color: #1f8b4c;
    }

    .feature-card.blue {
        background-color: #e0f0ff;
        color: #1c6dd0;
    }

    .feature-card.yellow {
        background-color: #fff8e5;
        color: #b58b00;
    }

    .feature-card span {
        font-size: 0.95rem;
        font-weight: 600;
        text-align: center;
    }

    @media (max-width: 768px) {
        .why-container {
            flex-direction: column;
            gap: 30px;
        }

        .why-text h2 {
            font-size: 28px;
            text-align: center;
        }

        .why-text p {
            font-size: 15px;
            text-align: center;
        }

        .about-btn {
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        .why-features {
            grid-template-columns: repeat(2, 1fr);
        }

        .feature-card {
            min-height: 120px;
            padding: 12px;
        }

        .feature-card span {
            font-size: 0.85rem;
        }

        .feature-card .icon {
            font-size: 1.4rem;
            padding: 10px;
        }
    }

    @media (max-width: 480px) {
        .why-features {
            grid-template-columns: 1fr;
        }

        .feature-card {
            min-height: 100px;
        }

        .why-text h2 {
            font-size: 24px;
        }

        .why-text p {
            font-size: 14px;
        }
    }

    /* Mobile Responsiveness */
    @media (max-width: 600px) {
        .why-text h2 {
            font-size: 26px;
        }

        .why-text p {
            font-size: 15px;
        }

        .feature-card {
            padding: 16px;
            min-height: 120px;
        }

        .feature-card .icon {
            font-size: 1.5rem;
            padding: 10px;
        }

        .feature-card span {
            font-size: 0.85rem;
        }

        .about-btn {
            padding: 12px 20px;
            font-size: 15px;
        }
    }
</style>


<!-- Bagian News -->
<section id="news" class="news-section">
    <div class="container">
        <div class="news-header">
            <h2>Latest News</h2>
            <a href="<?= base_url('/news') ?>" class="see-all">See All →</a>
        </div>

        <?php if (!empty($news) && count($news) > 0): ?>
            <div class="news-wrapper">
                <!-- Left Big News -->
                <?php $main = $news[0]; ?>
                <div class="news-main">
                    <a href="<?= base_url('/newsdetail/' . $main['id_news']) ?>" class="news-item-link">
                        <img src="<?= base_url('images/news/' . $main['image_url']) ?>" alt="<?= esc($main['title']) ?>" class="news-main-img">
                        <div class="news-main-content">
                            <p class="news-category"><?= esc($main['category']) ?></p>
                            <h3 class="news-title"><?= esc($main['title']) ?></h3>
                            <p class="news-summary"><?= word_limiter($main['description'], 20) ?></p>
                            <p class="news-date"><?= date('d M Y', strtotime($main['date_posted'])) ?></p>
                        </div>
                    </a>
                </div>

                <!-- Right List News -->
                <div class="news-list">
                    <?php foreach (array_slice($news, 1) as $item): ?>
                        <a href="<?= base_url('/newsdetail/' . $item['id_news']) ?>" class="news-item-link">
                            <div class="news-item">
                                <img src="<?= base_url('images/news/' . $item['image_url']) ?>" alt="<?= esc($item['title']) ?>" class="news-thumb">
                                <div class="news-item-body">
                                    <p class="news-category"><?= esc($item['category']) ?></p>
                                    <h4 class="news-title"><?= esc($item['title']) ?></h4>
                                    <p class="news-summary"><?= word_limiter($item['description'], 20) ?></p>
                                    <p class="news-date"><?= date('d M Y', strtotime($item['date_posted'])) ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <p class="text-muted">No news available at the moment.</p>
        <?php endif; ?>
    </div>
</section>


<!-- Style News -->
<style>
    .news-section {
        padding: 60px 20px;
        background: #fafafa;
    }

    .news-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .news-header h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #111;
    }

    .see-all {
        color: #d60000;
        font-weight: 500;
        text-decoration: none;
    }

    .see-all:hover {
        text-decoration: underline;
    }

    .news-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
    }

    .news-main {
        flex: 1 1 60%;
        min-width: 300px;
    }

    .news-main-img {
        width: 100%;
        height: 340px;
        object-fit: cover;
        border-radius: 12px;
    }

    .news-main-content {
        margin-top: 16px;
    }

    .news-main-content .news-category {
        color: #d60000;
        font-size: 0.9rem;
        margin-bottom: 6px;
    }

    .news-main-content .news-title {
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .news-main-content .news-summary {
        font-size: 1rem;
        color: #444;
        margin-bottom: 8px;
    }

    .news-main-content .news-date {
        font-size: 0.85rem;
        color: #777;
    }

    .news-list {
        flex: 1 1 35%;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .news-item {
        display: flex;
        gap: 12px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        transition: box-shadow 0.2s ease;
    }

    .news-item:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .news-thumb {
        width: 100px;
        height: 100px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .news-item-body {
        padding: 10px;
        flex: 1;
    }

    .news-item-body .news-category {
        font-size: 0.8rem;
        color: #d60000;
        margin-bottom: 4px;
    }

    .news-item-body .news-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .news-item-body .news-summary {
        font-size: 0.9rem;
        color: #444;
        margin-bottom: 4px;
    }

    .news-item-body .news-date {
        font-size: 0.75rem;
        color: #888;
    }

    .news-link,
    .news-item-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    @media (max-width: 768px) {
        .news-wrapper {
            flex-direction: column;
        }

        .news-main-img {
            height: 250px;
        }
    }

    .news-list {
        flex: 1 1 35%;
        display: flex;
        flex-direction: column;
        gap: 16px;
        max-height: 360px;
        overflow-y: auto;
        padding-right: 6px;
    }

    /* Scrollbar Styling (opsional, agar cantik) */
    .news-list::-webkit-scrollbar {
        width: 6px;
    }

    .news-list::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 4px;
    }

    .news-list::-webkit-scrollbar-thumb:hover {
        background-color: #aaa;
    }
</style>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper(".bannerSwiper", {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    });
</script>


<?= $this->endSection() ?>