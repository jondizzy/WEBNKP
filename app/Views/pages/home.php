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


    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.4);
        /* Efek gelap */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        padding: 0 20px;
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
</style>

<!-- VIDEO SECTION -->
<?= $this->section('hero') ?>
<section class="video-hero">
    <div class="hero-section">
        <video class="background-video" autoplay muted loop playsinline preload="auto">
            <source src="<?= base_url('videos/company-profile.mp4') ?>" type="video/mp4">
        </video>
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

<section class="achievement">
    <div class="flex-container">
        <div class="columntext">
            <h1 style="color:blue; font-size: 40px;"> Achievement </h1>
            <p style="font-size: 25px">Pencapaian PT Nusamas Kimia Persada</p>
            <p>Sebagai Supplier, Importir, Distributor Bahan Kimia terkemuka di Indonesia, kami sudah mendapat banyak pencapaian selama ini!</p>
        </div>
        <div class="columntext">
            <div class="columntext">
                <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="400" height="350" class="center">
            </div>
            <!-- <div class="flex-container">
            <div class="columntext">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="200" height="150">
                </a>
            </div> 
            <div class="columntext">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="200" height="150">
                </a>
            </div> 
        </div>
        <div class="flex-container">
            <div class="columntext">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="200" height="150">
                </a>
            </div> 
            <div class="columntext">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="200" height="150">
                </a>
            </div> 
        </div> -->
        </div>
    </div>
</section>


<section class="mengapa-memilih-kami"> <!--mengapa memilih kami?-->
    <style>
        .mengapa-memilih-kami {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: space-between;
            align-items: flex-start;
            ;
        }

        .left-column {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
        }

        .left-column h2 {
            font-size: 28px;
            margin-bottom: 16px;
        }

        .left-column .highlight {
            color: blue;
        }

        .left-column p {
            font-size: 16px;
            line-height: 1.6;
            margin-botton: 20px;
        }

        .right-column {
            min-width: 300px;
            max-width: 600px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-items: center;
            gap: 20px;
        }

        .feature-blocks {
            width: 160px;
            text-align: center;
        }

        .icon-img {
            width: 80px;
            height: 80px;
            border-radius: 16px;
            margin: 0 auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .blockcolor-purple {
            background-color: #eae6fc;
        }

        .blockcolor-pink {
            background-color: #fdecee;
        }

        .blockcolor-green {
            background-color: #e6f6f1;
        }

        .blockcolor-blue {
            background-color: #e6f0fc;
        }

        .blockcolor-yellow {
            background-color: #fff4e5;
        }
    </style>

    <div class="left-column">
        <h2><span class="highlight">Mengapa Memilih Kami?</span></h2>
        <p>
            PT Nusamas Kimia Persada berkomitmen penuh untuk memenuhi setiap kebutuhan Anda dalam produk bahan kimia mulai dari pencampuran, pengemasan  hingga pengiriman
        </p>
        <p>
            Keunggulan kami meliputi:
        </p>
        <a href="<?= base_url('/about') ?>" class="btn">About Us</a>
    </div>

    <div class="right-column">
        <div class="features">
            <div class="feature-blocks">
                <div class="icon-img blockcolor-purple">
                    <!-- icon purple -->
                </div>
                <p><strong>Jaringan Distribusi Andal</strong></p>
            </div>

            <div class="feature-blocks">
                <div class="icon-img blockcolor-pink">
                    <!-- icon pink -->
                </div>
                <p><strong>Kemitraan Global</strong></p>
            </div>

            <div class="feature-blocks">
                <div class="icon-img blockcolor-green">
                    <!-- icon green -->
                </div>
                <p><strong>Keahlian Industri</strong></p>
            </div>

            <div class="feature-blocks">
                <div class="icon-img blockcolor-blue">
                    <!-- icon blue -->
                </div>
                <p><strong>Jaminan Kualitas</strong></p>
            </div>

            <div class="feature-blocks">
                <div class="icon-img blockcolor-yellow">
                    <!-- icon yellow -->
                </div>
                <p><strong>Komitmen Keberlanjutan</strong></p>
            </div>
        </div> <!-- features -->
    </div> <!-- right column -->

</section>


<section class="achievement">
<div class="flex-container">
    <div class="columntext">
        <h1 style="color:blue; font-size: 40px;"> Achievement </h1>
        <p style="font-size: 25px">Pencapaian PT Nusamas Kimia Persada</p>
        <p>Sebagai Supplier, Importir, Distributor Bahan Kimia terkemuka di Indonesia, kami sudah mendapat banyak pencapaian selama ini!</p>
    </div>
    <div class="columntext">
        <div class="columntext">
            <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="400" height="350" class="center">
        </div>
        <!-- <div class="flex-container">
            <div class="columntext">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="200" height="150">
                </a>
            </div> 
            <div class="columntext">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="200" height="150">
                </a>
            </div> 
        </div>
        <div class="flex-container">
            <div class="columntext">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="200" height="150">
                </a>
            </div> 
            <div class="columntext">
                <a href="<?= base_url('/product/detail/1') ?>">
                    <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="200" height="150">
                </a>
            </div> 
        </div> -->
    </div>
</div>
</section>

<?= $this->endSection() ?>