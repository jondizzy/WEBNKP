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
        height: 350px;
        border-radius: 18px;
        position: relative;
        overflow: hidden;
        margin-bottom: 40px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        /* bayangan lembut */
    }

    .Product-text::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2));
        /* gradient gelap ke terang */
        border-radius: 18px;
        z-index: 1;
    }

    .Product-text-content {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        padding: 20px 40px;
        /* biar teks tidak nempel kiri-kanan */
    }

    .Product-text-content h2,
    .Product-text-content p {
        color: #fff;
        /* putih */
        text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.7);
        /* biar lebih jelas */
    }

    .Product-text-content h2 {
        font-size: 26px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .Product-text-content p {
        font-size: 16px;
        line-height: 1.5;
    }

    .explore-button {
        align-self: flex-end;
        /* tombol tetap kanan bawah */
        margin-top: auto;
        /* dorong ke bawah */
        background-color: #000066;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 30px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .explore-button:hover {
        background-color: #000044;
        transform: scale(1.05);
        /* efek hover lebih hidup */
    }

    .Product-container {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scroll-behavior: auto;
        /* Jangan smooth, biar infinite loop cepat */
    }

    .Product-container::-webkit-scrollbar {
        display: none;
    }

    .Product-container img {
        flex: 0 0 auto;
        width: 200px !important;
        height: 150px !important;
        border-radius: 8px !important;
        margin-right: 20px !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .Product-container img:hover {
        transform: scale(1.12);
        /* dari 1.08 ke 1.12 */
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
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

    .bg-category {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* isi penuh, crop kalau perlu */
        border-radius: 18px;
        z-index: 0;
    }

    .section-wrapper {
        width: 90%;
        /* biar nggak full */
        max-width: 1200px;
        /* biar rapih di layar besar */
        margin: 0 auto;
        /* otomatis center */
        padding: 0 20px;
        /* jarak kiri kanan */
    }

    .carousel-wrapper {
        overflow: hidden;
        width: 100%;
        position: relative;
    }

    .carousel-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: max-content;
    }

    .carousel-track img {
        flex: 0 0 auto;
        width: 160px;
        height: 120px;
        margin-right: 20px;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .carousel-track img:hover {
        transform: scale(1.08);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }
</style>


<section class="section-wrapper">
    <?php foreach ($data as $item): ?>
        <div class="Product-text">
            <img src="<?= base_url('images/category/' . esc($item['category']['img_url'])) ?>" class="bg-category">

            <div class="Product-text-content">
                <h2><strong><?= esc($item['category']['name']); ?></strong></h2>
                <p><?= esc($item['category']['deskripsi']); ?></p>
                <br>

                <div class="Product-container" id="carousel-<?= esc($item['category']['category_id']) ?>">
                    <?php foreach ($item['produk'] as $product): ?>
                        <img src="<?= base_url('images/product/' . esc($product['img_url'])) ?>" alt="<?= esc($product['nama']) ?>">
                    <?php endforeach; ?>
                </div>

                <a class="explore-button" href="<?= base_url('/ProductDetail/' . $item['category']['category_id']) ?>">
                    Explore more ⟶
                </a>
            </div>
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

    document.querySelectorAll('.Product-container').forEach((container) => {
        const scrollSpeed = 1; // kecepatan scroll

        const children = Array.from(container.children);

        if (children.length < 5) return;

        children.forEach(child => {
            const clone = child.cloneNode(true);
            container.appendChild(clone);
        });

        function autoScroll() {
            container.scrollLeft += scrollSpeed;

            if (container.scrollLeft >= container.scrollWidth / 2) {
                container.scrollLeft = 0;
            }

            requestAnimationFrame(autoScroll);
        }

        autoScroll(); // Mulai scroll
    });
</script>
<?= $this->endSection() ?>