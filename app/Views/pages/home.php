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
<section> <!--mengapa memilih kami?-->


<style>
.leftcolumn {
  background-color: blue;
  flex: 50%; 
}
.rightcolumn {
    background-color: red;
    flex:50%;
}
.row {
  content: "";
  display: flex;
}
.square {
  height: 150px;
  width: 150px;
  background-color: green;
  border-radius: 30px;
}

.firstsquarecolumn {
    flex: 16%;
    padding: 10px;
}
.secondsquarecolumn {
    flex: 16%;
    padding: 10px;
}
.thirdsquarecolumn {
    flex: 16%;
    padding: 10px;
}
.fourthsquarecolumn {
    flex: 50%;
    padding: 10px;
    width: 100%;
    margin: auto;  
}
.fifthsquarecolumn {
    flex: 50%;
    padding: 10px;
    width: 100%;
    margin: auto;
}
.squarerow {
    content: "";
    display: flex;
    align: center;
}
</style>


    <div class="row">
        <div class="leftcolumn"> 
            <h2>Mengapa Memilih Kami?</h2>
            <p>PT Nusamas Kimia Persada berkomitmen penuh untuk memenuhi setiap kebutuhan Anda dalam produk bahan kimia mulai dari pencampuran, pengemasan  hingga pengiriman</p>
            <p>Keunggulan kami meliputi:</p>
            <a href="<?= base_url('/about') ?>" class="btn">About Us</a>
        </div>
            <div class="rightcolumn">
                <div class="squarerow">
                    <div class="firstsquarecolumn">
                        <div class="square"></div>
                    </div>
                        <div class="secondsquarecolumn">
                            <div class="square"></div>
                        </div>
                            <div class="thirdsquarecolumn">
                                <div class="square"></div>
                            </div>
                </div>
                <div class="squarerow">
                    <div class="fourthsquarecolumn">
                        <div class="square"></div>
                    </div>
                        <div class="fifthsquarecolumn">
                            <div class="square"></div>
                        </div>
                </div>
            </div>     
    </div>
</section>


<?= $this->endSection() ?>