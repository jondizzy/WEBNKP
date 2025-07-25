<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    /* body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100%;
    width: 100%;
} */
    .banner-product {
    position: relative;
    background-image: url('https://mcdn.wallpapersafari.com/medium/97/50/imoTaW.jpg'); /* Add your image URL here */
    background-size: cover;
    background-position: center;
    height: 50vh;
    display: flex;
    justify-content: flex-start;
    align-items: flex-end;  /* Aligns the text container at the bottom */
    padding-left: 30px;
    color: white;
}

.text-container {
    max-width: 500px;
    background-color: white; /* Semi-transparent background */
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 30px;
}

.text-container h1 {
    font-size: 3rem;
    margin: 0;
    color: black;
}

.down-arrow {
    display: inline-block;
    font-size: 2rem;
    margin-top: 20px;
    text-decoration: none;
    color: black;
    transition: transform 0.3s ease;
}

.down-arrow:hover {
    transform: translateY(5px);
}
.product-container{
    display: flex;

    justify-content: space-around;
    gap: 20px;
    padding: 20px;
    width: 50%;
}

</style>
<section>
    <div class="banner-product">
        <div class="text-container">
            <h1>Essential Oil</h1>
            <a href="#next-section" class="down-arrow">&#8595;</a>
        </div>
    </div>
    <div class="product-detail">
        <div class="product-container">
            <div class="detail-container">
                <h1>Judul</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum sapiente corrupti, suscipit placeat tempore enim quis doloremque cumque asperiores. Ipsa alias dolor quas, voluptas quod repellat excepturi mollitia consequuntur accusantium?</p>
            </div>
            <div class="picture-container">
                <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="300" height="250">
            </div>
        </div>

    </div>
</section>
<?= $this->endSection() ?>