<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .op-list{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 20px;
        padding: 20px;
    }
    .op-box{
        width: 300px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        padding: 15px;
        transition: transform 0.3s ease;
    }
        .op-box img {
        width: 100%;
        border-radius: 8px;
    }
</style>
<section>
    <div class="op-container">
        <h1>Our Product</h1>
        <div class="op-list">
            <div class="op-box">
                <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="300" height="250">
                <caption>product1</caption>
            </div>
            <div class="op-box">
                <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="300" height="250">
                <caption>product2</caption>
            </div>
            <div class="op-box">
                <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="300" height="250">
                <caption>product3</caption>
            </div>
        </div>
    </div>
    <div>
        <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="300" height="1000">
    </div>
</section>

<?= $this->endSection() ?>