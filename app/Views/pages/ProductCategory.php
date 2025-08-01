<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .food {
        background-color: #f0f8ff;
        border-radius: 18px;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .esensial-oil {
        background-color: #fff8f0;
        border-radius: 18px;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .agrochemicals {
        background-color: #F0FFF1;
        border-radius: 18px;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .Product-text {
        padding: 30px;
        margin-bottom: 40px;
        position: relative;
    }

    .Product-text h2 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .Product-container {
        display: flex;
        justify-content: space-evenly;
        margin-bottom: 40px;
        padding-bottom: 90px;
    }

    .Product-container img {
        width: 160px;
        height: 120px;
        border-radius: 8px;
    }

    .explore-button {
        position: absolute;
        bottom: 30px;
        right: 30px;
        background-color: #000066;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 30px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .explore-button:hover {
        background-color: #000044;
    }

    @media (max-width: 768px) {
        .image-row {
            flex-direction: column;
            align-items: center;
        }

        .Product-container img {
            width: 100%;
        }

        W .explore-button {
            position: static;
            display: inline-block;
            padding-top: 15px;
            margin-top: 20px;
        }
    }

    .bottom-message {
        text-align: center;
        margin: 60px 0 30px 0;
        font-size: 18px;
    }

    .bottom-message button {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #000066;
        color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    .bottom-message button:hover {
        background-color: #000044;
    }
</style>


<section class="food">
    <div class="Product-text">
        <h2><strong>Food Ingredients</strong></h2>
        <p>
            Kategori Makanan mencakup bahan-bahan esensial dan aditif yang
            meningkatkan kualitas, rasa, dan stabilitas produk makanan.
            Bahan-bahan ini memainkan peran krusial dalam berbagai aplikasi
            pengolahan dan manufaktur makanan.
        </p>
        <div class="Product-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
        </div>
        <a class="explore-button" href="<?= base_url('/productdetail') ?>">Explore more ⟶</a>
    </div>
</section>

<section class="esensial-oil">
    <div class="Product-text">
        <h2><strong>Essential Oils</strong></h2>
        <p>
            Kategori Makanan mencakup bahan-bahan esensial dan aditif yang meningkatkan kualitas, rasa, dan stabilitas produk makanan. Bahan-bahan ini memainkan peran krusial dalam berbagai aplikasi pengolahan dan manufaktur makanan.
        </p>
        <div class="Product-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
        </div>
        <a class="explore-button" href="#">Explore more ⟶</a>
    </div>
</section>

<section class="agrochemicals">
    <div class="Product-text">
        <h2><strong>Agrochemicals</strong></h2>
        <p>
            Kategori Makanan mencakup bahan-bahan esensial dan aditif yang meningkatkan kualitas, rasa, dan stabilitas produk makanan. Bahan-bahan ini memainkan peran krusial dalam berbagai aplikasi pengolahan dan manufaktur makanan.
        </p>
        <div class="Product-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s"
                alt="Food Image 1" />
        </div>
        <a class="explore-button" href="#">Explore more ⟶</a>
    </div>
</section>

<!-- bottom section -->
<section>
    <div class="bottom-message">
        <p>Can’t find what you’re looking for?</p>
        <button onclick="scrollToTop()">Back to Top ↑</button>
    </div>
</section>

<!-- back on top funtcion -->
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
<?= $this->endSection() ?>