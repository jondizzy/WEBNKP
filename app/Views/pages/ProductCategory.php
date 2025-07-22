<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@10/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@10/swiper-bundle.min.js" defer></script>
  <style>
    /* body */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .main {
      display: flex;
      flex: 1;
    }

    .sidebar {
      width: 200px;
      background-color: #333;
      color: white;
      padding: 20px;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      margin: 10px 0;
    }
  /* Content */
    .content {
      flex: 1;
      padding: 20px;
      background-color: #f4f4f4;
    }
    .category-detail{
      background-color: lightskyblue;
      text-align: center;
      padding: 20px;
    }
  /* table */
    table {
      width: 100%;
      border-collapse: collapse;
      padding-top: 20px;
    }
    th, td {
      width: 33.33%; /* Equal width for 3 columns */
      border: 1px solid black;
      text-align: center;
      padding: 8px;
    }
    td img {
      display: block;
      margin: 0 auto 8px auto;
      max-width: 100%;
      height: auto;
    }
    .caption {
      font-weight: bold;
    }

    /* Header */
    .site-header {
        background-color: white;
        box-shadow: 0 1px 5px rgba(0,0,0,0.05);
        padding: 15px 0;
        position: sticky;
        top: 0;
        z-index: 10;

        padding: 10px;
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo-wrapper {
        display: flex;
        align-items: center;
    }

    .logo-img {
        height: 40px;
        margin-right: 10px;
    }

    .site-name {
        font-weight: bold;
        color: #222;
        font-size: 16px;
    }

    .main-nav a {
        margin-left: 20px;
        font-weight: 500;
        color: #333;
        transition: color 0.3s;
    }

    .main-nav a:hover {
        color: #4c44da;
    }

    .wa-icon {
        font-size: 20px;
        color: #25D366;
    }
    /* Footer */
    .site-footer {
        background: #f5f5f5;
        text-align: center;
        padding: 20px 0;
        font-size: 14px;
        bottom: 0;
        color: #666;
    }
  </style>
</head>
<body>

  <header class="site-header">
        <div class="container header-container">
            <div class="logo-wrapper">
                <img src="<?= base_url('images/logo.jpg') ?>" alt="Logo" class="logo-img">
            </div>
            <nav class="main-nav">
                <a href="<?= base_url('/') ?>">Home</a>
                <a href="<?= base_url('/about') ?>">About</a>
                <a href="<?= base_url('/ProductCategory') ?>">Product</a>
                <a href="<?= base_url('/client') ?>">Client</a>
                <a href="<?= base_url('/contact') ?>">Contact</a>
                <a href="<?= base_url('/news') ?>">News</a>
                <a href="https://wa.me/6281321693363" class="wa-icon" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </nav>
        </div>
    </header>

  <div class="main">
    <aside class="sidebar">
      <h2>Category</h2>
      <br>
      <a href="#">Food Category</a>
      <a href="#">Essential Oils</a>
      <a href="#">Speciality</a>
    </aside>

    <section class="content">
      <div class="category-detail">
        <h2 style="text-align: center;">Food Ingridient</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae repudiandae, eos magnam iusto laborum deleniti nesciunt molestiae hic facilis temporibus veniam omnis optio ad expedita magni, maiores accusantium vero! Voluptate?</p>
      </div>
        <table>
    <tr>
      <th>
        <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="300" height="250">
        <div class="caption">Food 1</div>
      </th>
      <th>
        <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="300" height="250">
        <div class="caption">Food 2</div>
      </th>
      <th>
        <img src="<?= base_url('images/Product1.png') ?>" alt="Produk 1" width="300" height="250">
        <div class="caption">Food 3</div>
      </th>
    </tr>
  </table>
    </section>
  </div>

  <footer class="site-footer">
        <div class="container">
            <p>&copy; 2025 PT. Nusamas Kimia Persada<br>
                Hak cipta dilindungi undang-undang.</p>
        </div>
    </footer>

</body>
</html>