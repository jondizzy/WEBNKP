<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .banner-product {
        position: relative;
        background-image: url('https://static.vecteezy.com/system/resources/previews/000/701/690/non_2x/abstract-polygonal-banner-background-vector.jpg');
        background-size: cover;
        background-position: center;
        height: 50vh;
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        padding-left: 30px;
        color: white;
    }

    .text-container {
        padding: 20px;
        margin-top: auto;
        margin-bottom: auto;
    }

    h1 {
        font-size: 52px;
    }

    .product-detail {
        background-color: #1f2a75;
        color: #E2E2E2;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        border-radius: 18px;
    }

    .productdetail-text {
        width: 70%;
    }

    .product-detail-text h2 {
        margin-top: 0;
    }

    .product-detail img {
        width: 150px;
        height: auto;
        border-radius: 8px;
    }

    .product-table {
        padding: 20px;
    }

    table {
        width: 95%;
        border-collapse: collapse;
        border-radius: 15px;
        overflow: hidden;
        margin: auto;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 15px;
        text-align: left;
    }

    th {
        background-color: #1f2a75;
        color: white;
    }

    tr:nth-child(odd) td {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) td {
        background-color: #ffffff;
    }
</style>

<!-- banner -->
<section>
    <div class="banner-product">
        <div class="text-container">
            <h1>Essential Oil</h1>
        </div>
    </div>
</section>

<!-- detail -->
<section style="padding-top: 20px;">
    <div class="product-detail">
        <div class="productdetail-text">
            <h2>SATU TETES KEAJAIBAN DARI ALAM</h2>
            <p>
                Diekstrak langsung dari tanaman pilihan, senyawa alami ini menghadirkan kesegaran murni,
                kesehatan yang menenangkan, dan energi positif yang memancar ke seluruh indera.
            </p>
            <p>
                Cocok untuk aromaterapi, perisa alami, hingga keharuman yang memikat,
                setiap tetesnya membawa Anda lebih dekat ke harmoni tubuh, pikiran, dan jiwa.
            </p>
            <p><strong>Alami. Murni. Menyentuh hati.</strong></p>
        </div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrX6eIoiNP862JmJC18qwcDjrUMnexyaAaOQ&s" alt="Minyak alami"> <!-- Replace with actual image URL -->
    </div>
</section>

<!-- table product-->
<section>
    <div class="product-table">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Produk</th>
                    <th>Spesifikasi / fungsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

</section>
<?= $this->endSection() ?>