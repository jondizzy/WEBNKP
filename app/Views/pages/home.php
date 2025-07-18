<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="hero">
    <h1>Mengapa Memilih Kami?</h1>
    <p>PT Nusamas Kimia Persada berkomitmen penuh...</p>
    <a href="<?= base_url('/about') ?>" class="btn">About Us</a>
</section>

<section class="product-slider-section">
    <h2>Produk Kami</h2>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Item produk -->
            <div class="swiper-slide">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1">
                    <p>Nama Produk 1</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= base_url('/product/detail/2') ?>">
                    <img src="<?= base_url('images/Product2.png') ?>" alt="Produk 2">
                    <p>Nama Produk 2</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="<?= base_url('/product/detail/2') ?>">
                    <img src="<?= base_url('images/Product3.png') ?>" alt="Produk 2">
                    <p>Nama Produk 2</p>
                </a>
            </div>
        </div>

        <!-- Navigasi -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<?= $this->endSection() ?>