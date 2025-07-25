<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    /* Hindari container utama mempengaruhi video section */
    .video-hero {
        position: relative;
        width: 100vw !important;
        height: 100vh;
        margin: 0;
        padding: 0;
        overflow: hidden;
        max-width: 100vw !important;
    }

    /* Hapus padding dari elemen parent */
    .video-hero,
    .video-hero * {
        box-sizing: border-box;
    }

    /* Tambahan umum */
    html,
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .hero-section {
        position: relative;
        width: 100vw;
        height: 70vh;
        overflow: hidden;
        background-color: black;
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
        z-index: 1;
    }

    .banner-image {
        width: 100%;
        overflow: hidden;
    }

    .banner-swiper-section {
        width: 100%;
        height: 400px;
        margin-bottom: 200px;
    }

    .banner-swiper-section .swiper-slide {
        width: 100%;
        height: 100%;
    }

    .banner-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .banner-swiper-section .swiper-slide img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        object-position: center;
        display: block;
    }
</style>


<!-- BANNER IMAGE SECTION -->
<?= $this->section('hero') ?>
<!-- BANNER IMAGE SECTION -->
<section class="banner-swiper-section">
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?= base_url('images/banner/banner 1.jpg') ?>" class="banner-img" alt="Banner 1">
            </div>
            <div class="swiper-slide">
                <img src="<?= base_url('images/banner/banner 2.jpg') ?>" class="banner-img" alt="Banner 2">
            </div>
            <div class="swiper-slide">
                <img src="<?= base_url('images/banner/banner 3.jpg') ?>" class="banner-img" alt="Banner 3">
            </div>
        </div>

        <!-- Optional navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

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
<?= $this->endSection() ?>



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