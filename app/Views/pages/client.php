<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
    .clients-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        background: #fff;
    }

    .clients-section h2 {
        font-size: 2rem;
        text-align: center;
        margin-bottom: 2.5rem;
        color: #222;
        font-weight: 600;
    }

    .country-title {
        font-size: 1.5rem;
        color: #333;
        margin: 2rem 0 1.2rem;
        border-bottom: 2px solid #e0e0e0;
        padding-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }

    .flag {
        width: 28px;
        height: auto;
    }

    .clients-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .client-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        background-color: #fdfdfd;
        text-decoration: none;
        color: inherit;
        transition: transform 0.2s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .client-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .client-card .image-wrapper {
        width: 100%;
        height: 180px;
        overflow: hidden;
        background-color: #eee;
    }

    .client-card .image-wrapper img.company-logo {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        display: block;
    }



    .client-card h4 {
        font-size: 1.1rem;
        margin: 0.8rem 0 0.3rem;
        padding: 0 1rem;
        text-align: center;
        color: #000;
        font-weight: 500;
    }

    .client-card p {
        font-size: 0.95rem;
        color: #555;
        text-align: center;
        padding: 0 1rem 1rem;
        line-height: 1.4;
    }
</style>

<section class="clients-section">
    <h2>Our Clients & Projects</h2>

    <!-- Indonesia -->
    <h3 class="country-title">
        <img src="https://flagcdn.com/w40/id.png" class="flag" alt="Indonesia"> Indonesia
    </h3>
    <div class="clients-grid">
        <a href="/client/detail/myrepublic" class="client-card">
            <div class="image-wrapper">
                <img src="/images/client1.jpeg" alt="Waymouth" class="company-logo">
            </div>
            <h4>MY REPUBLIC JUNCTION</h4>
            <p>GREEN OFFICE PARK 6 BSD</p>
        </a>
        <a href="/client/detail/waymouth-street" class="client-card">
            <div class="image-wrapper">
                <img src="/images/client2.jpg" alt="Waymouth" class="company-logo">
            </div>
            <h4>Waymouth Street, Adelaide</h4>
            <p>Grade A office building di CBD</p>
        </a>
    </div>

    <!-- China -->
    <h3 class="country-title">
        <img src="https://flagcdn.com/w40/cn.png" class="flag" alt="China"> China
    </h3>
    <div class="clients-grid">
        <a href="/client/detail/waymouth-street" class="client-card">
            <div class="image-wrapper">
                <img src="/images/client3.jpg" alt="Waymouth" class="company-logo">
            </div>
            <h4>NIHAO COMPANY</h4>
            <p>BEIJING</p>
        </a>
    </div>

    <!-- Malaysia -->
    <h3 class="country-title">
        <img src="https://flagcdn.com/w40/my.png" class="flag" alt="Malaysia"> Malaysia
    </h3>
    <div class="clients-grid">
        <a href="/client/detail/giffnock-avenue" class="client-card">
            <div class="image-wrapper">
                <img src="/images/client4.jpg" alt="Giffnock" class="company-logo">
            </div>
            <h4>TUK DALANG COMPANY</h4>
            <p>KOMPLEK UPIN IPIN KE SURGA</p>
        </a>

    </div>
</section>
<?= $this->endSection() ?>