<!DOCTYPE html>
<html lang="en">
    <head>
        <body>
            <!-- Header Section -->
             <section class="header-section">
                
             </section>

        </body>

    </head>

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
        }

        .header-section h2 span {
            color: #000000;
        }

        .header section a {
            color: #080761;
            font-weight: bold;
            text-decoration: underline;
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
            text-aligh: center;
            margin-botton: 40px;
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
                aign-items: center;
                text-align: center;
            }
        }
    </style>
</html>