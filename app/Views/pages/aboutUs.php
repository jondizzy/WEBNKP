<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<html lang="en">
            <!-- Header Section -->
             <section class="header-section">
                <h2><span class="highlight-blue">20 tahun</span> berdiri sebagai pemasok bahan kimia terpercaya</h2>
                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx. sejarah awal berdiri</p>
                
             </section>
            <!-- Visi Misi Mutu Section -->
            <section class="vmm-section">
                <div class="vmm-container">
                    <div class="vmm-box-icon">Visi</div>
                    <div class="vmm-box-icon">Misi</div>
                    <div class="vmm-box-icon">Mutu</div>
                </div>
                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx. nilai nilai perusahaan</p>
            
            </section>

            <!--Kepuasan Section-->
            <section class="kepuasan-section">
                <h3><span>Kepuasan </span>pelanggan merupakan prioritas utama</h3>
                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx. layanan after sales dan staff yang siap support</p>

            </section>

            <!--Sertifikat Section-->
            <section class="sertifikat-section">
                <h3>Sertifikat yang diakui</h3>
                <div class="sertifikat">
                    <img src="https://via.placeholder.com/200x120?text=Sertifikat+A" alt="Sertifikat A">
                    <div>
                        <h4>Sertifikat A</h4>
                        <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx tentang sertifikat A</p>
                    </div>
                </div> <!-- sertifikat A-->
                <div class="sertifikat">
                    <img src="https://via.placeholder.com/200x120?text=Sertifikat+B" alt="Sertifikat B">
                    <div>
                        <h4>Sertifikat B</h4>
                        <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx tentang sertifikat B</p>
                    </div>
                </div> <!-- sertifikat B-->
                <div class="sertifikat">
                    <img src="https://via.placeholder.com/200x120?text=Sertifikat+C" alt="Sertifikat C">
                    <div>
                        <h4>Sertifikat C</h4>
                        <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx tentang sertifikat C</p>
                    </div>
                </div> <!-- sertifikat C-->
            </section>
     <!-- CSS styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            line-height: 1.6;
            font-family: Arial, sans-serif;
            color: #333;
            background: #f9f9f9;
        }

        h2, h3, h4 {
            margin: 0 0 10px;
        }

        section {
            padding: 20px;
        }

        /*header section*/
        .header-section{
            background-color: #d9d9d9;
            text-align: center;
            padding: 30px 20px;
            padding-top: 10%;
        }

        .header-section h2 {
            color: #000000;
        }

        .highlight-blue {
            color: #080761;
            font-weight: bold;
        }

        /*visi misi mutu*/
        .vmm-section {
            background-color: #080761;
            color: #d9d9d9;
            text-align: center;
            padding: 40px 20px;
        }

        .vmm-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 20px;
        }

        .vmm-box-icon {
            background-color: #cccccc;
            width: 120px;
            height: 120px;
            color: #000;
            padding: 20px 40px;
            border-radius: 10px;
            font-weight: bold;
        }

        /*kepuasan*/
        .kepuasan-section {
            background-color: #ffffff;
            padding: 30px 20px;
        }

        .kepuasan-section h3 span {
            color: #080761;
            font-weight: bold;
        }

        /*sertifikat*/
        .sertifikat-section {
            background-color: #d9d9d9;
            padding: 40px 20px;
        }

        .sertifikat-section h3 {
            text-align: center;
            margin-bottom: 40px;
        }

        .sertifikat {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            margin-bottom: 40px;
            padding: 0 20px;
        }

        .sertifikat:nth-child(even) {
            flex-direction: row-reverse;
        }

        .sertifikat img {
            width: 200px;
            height: auto;
            object-fit: cover;
            border-radius: 5px;
        }

        /*responsive*/
        @media (max-width: 768px) {
            .vmm-container {
                flex-direction: column;
                align-items: center;
            }

            .sertifikat {
                flex-direction: column !important;
                align-items: center;
                text-align: center;
            }
        }
    </style>
<?= $this->endSection() ?>
</html>