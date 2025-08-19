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

    .oil {
        background-color: #fff8f0;
        border-radius: 18px;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .industries {
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
        display: flex !important;
        justify-content: space-between !important;
        flex-wrap: wrap !important;
        margin-bottom: 40px !important;
        padding-bottom: 90px !important;
    }

    .Product-container img {
        width: 160px !important;
        height: 120px !important;
        border-radius: 8px !important;
        flex-grow: 1 !important;
        max-width: 25% !important;
        margin: 20px !important;
    }

    .Product-container img:nth-child(n+5) {
        display: none !important;
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


<section>
    <?php foreach ($data as $item): ?>
        <div class=" Product-text <?= strtolower(str_replace(' ', '-', $item['category']['name'])); ?>">
            <h2><strong><?= esc($item['category']['name']); ?></strong></h2>
            <p>
                Kategori Makanan mencakup bahan-bahan esensial dan aditif yang
                meningkatkan kualitas, rasa, dan stabilitas produk makanan.
                Bahan-bahan ini memainkan peran krusial dalam berbagai aplikasi
                pengolahan dan manufaktur makanan.
            </p>
            <br>
            <div class="Product-container">
                <?php foreach ($item['produk'] as $product): ?>
                    <img src="<?= base_url('images/product/' . $product['img_url']) ?>" alt="<?= esc($product['nama']) ?>">
                <?php endforeach; ?>
            </div>
            <a class="explore-button" href="<?= base_url('/ProductDetail/' . $item['category']['category_id']) ?>">Explore more ⟶</a>


        </div>
    <?php endforeach; ?>
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