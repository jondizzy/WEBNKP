<!-- views/admin_template.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Admin Page' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/font-awesome/css/font-awesome.min.css') ?>">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .sidebar {
            width: 250px;
            background: #343a40;
            min-height: 100vh;
            padding-top: 1rem;
            position: fixed;
            color: white;
        }

        .sidebar a {
            color: #ccc;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #007bff;
            color: white;
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }

        .navbar {
            background-color: #f8f9fa;
            padding: 1rem 2rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <!-- views/pages/admin/admin_template.php -->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3 vh-100 d-flex flex-column" style="width: 250px;">
            <h4 class="mb-4">Admin Panel</h4>
            <ul class="nav flex-column flex-grow-1">
                <li class="nav-item mb-2">
                    <a href="<?= base_url('admin/dashboard') ?>" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">Produk</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white">News</a>
                </li>
            </ul>
            <div class="mt-auto">
                <a href="<?= base_url('/logout') ?>" class="btn btn-outline-danger btn-sm w-100">Logout</a>
            </div>
        </div>

        <!-- Page Content -->
        <div class="p-4 w-100">
            <?= $this->renderSection('content') ?>
        </div>
    </div>


    <script src="<?= base_url('assets/js/core/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>