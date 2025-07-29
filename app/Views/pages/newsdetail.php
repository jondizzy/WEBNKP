<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .news-detail{
        padding: 20px;
        align-item: center;
    }
    .news-desc{
        padding-left: 5%;
        padding-right: 5%;
    }
    .back-button {
            background-color: #080761; /* Green background */
            color: white;              /* White text */
            border: none;              /* No border */
            padding: 15px 30px;        /* Padding */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;        /* Rounded corners */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #080761; /* Darker green on hover */
        }
        .button{
            padding-left: 8%;
            padding-top: 5%;
            padding-bottom:5%;
        }  
</style>
<div class="news-detail"> 
    <img src="https://cms.sinarmasland.com/uploads/large_Foto_1_Grand_Opening_bp_Asterra_West_BSD_d52096ef3f.png" alt="" width = "100%">
</div>
<div class="news-desc">
    <h2>Sinar Mas Land dan BP-AKR Meresmikan SPBU bp Pertama di BSD City</h2>
    <p>
        Hendra Lee (Direktur Keuangan BP-AKR), Maulina Novriani (Direktur Operasional BP-AKR), Roy Darmwan (Wakil Presiden Direktur BP-AKR), Vanda Laura (Presiden Direktur BP-AKR), Suresh Vembu (Dewan Komisaris BP-AKR), Surya Adil Wijaya (Direktur Utama PT Glodtree Energi Berjaya), Kiem An Andy (Direktur PT Glodtree Energi Berjaya), Ferdinand Sadeli (Deputy Group CEO INVITE Sinar Mas Land), Monik William (Deputy Group CEO Township Development Sinar Mas Land), Anna W. Budiman (CEO Commercial BSD - Sinar Mas Land), dan FX Ridwan Darmali (Advisor Chairman Office Sinar Mas Land) secara simbolis menggunting pita dalam acara Grand Opening SPBU bp Asterra West BSD City pada 21 Juli 2025 di BSD City. Dengan total investasi lebih dari USD 3 juta, SPBU bp ini dibangun di atas lahan lahan seluas 3.000 m² di kawasan Commercial Business Park BSD Tahap II bagian barat.
BSD City, 25 Juli 2025 – Dalam upaya memperkuat mobilitas modern yang berkelanjutan melalui penyediaan bahan bakar dan layanan berkualitas, Sinar Mas Land melalui PT Goldtree Energi Berjaya bersama PT Aneka Petroindo Raya (BP-AKR) secara resmi menggelar Grand Opening Stasiun Pengisian Bahan Bakar Umum (SPBU) bp pertama di BSD City pada Senin, 21 Juli 2025. Dengan total investasi lebih dari USD 3 juta, SPBU bp ini dibangun di atas lahan lahan seluas 3.000 m² di kawasan Commercial Business Park BSD Tahap II bagian barat. Kehadiran SPBU ini mencerminkan komitmen ketiga perusahaan dalam menghadirkan layanan bahan bakar yang efisien serta meningkatkan performa kendaraan, untuk mendukung produktivitas masyarakat modern di BSD City dan sekitarnya.
    </p>
    <p>Baca Juga : Rekomendasi Ruko untuk Investasi Properti Jangka Panjang</p>

</div>
<div class="button"><button class="back-button" onclick="history.back()">←</button></div>

<?= $this->endSection() ?>