<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- <section class="hero">
    <h1>Mengapa Memilih Kami?</h1>
    <p>PT Nusamas Kimia Persada berkomitmen penuh...</p>
    <a href="<?= base_url('/about') ?>" class="btn">About Us</a>
</section> -->

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

<section class="mengapa-memilih-kami"> <!--mengapa memilih kami?-->

<style>

.mengapa-memilih-kami {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: space-between;
    align-items: flex-start;;
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


<?= $this->endSection() ?>