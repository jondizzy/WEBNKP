<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Bagian Produk -->
<section class="product-slider-section">
    <h2>Produk Kami</h2>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- Item Produk 1 -->
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

            <!-- Item Produk 2 -->
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

            <!-- Item Produk 3 -->
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


<!-- Hero Section -->
<section class="hero">
    <div class="hero-overlay">
        <div class="hero-content">
            <h1>Mengapa Memilih Kami?</h1>
            <p>PT Nusamas Kimia Persada berkomitmen penuh dalam menyediakan solusi kimia berkualitas tinggi yang andal dan berkelanjutan.</p>
            <a href="<?= base_url('/about') ?>" class="btn">Tentang Kami</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>