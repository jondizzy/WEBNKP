<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Nusamas Kimia Persada | Login</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #00c6ff, #007bff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .login-card {
            background: #fff;
            border-radius: 12px;
            padding: 2.5rem 2rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            max-width: 450px;
            width: 100%;
        }

        .login-card .logo {
            max-width: 90px;
        }

        .login-card h4 {
            font-weight: 700;
            margin-top: 1rem;
        }

        .login-card p {
            color: #6c757d;
        }

        .form-control {
            border-radius: 30px;
            padding-left: 45px;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .form-group {
            position: relative;
        }

        .btn {
            border-radius: 30px;
            font-weight: 600;
            padding: 0.6rem 1.5rem;
        }

        .btn:hover {
            opacity: 0.92;
        }

        .extra-links a {
            margin-top: 0.5rem;
        }

        .text-small {
            font-size: 0.85rem;
        }

        .footer {
            margin-top: 1.5rem;
            font-size: 0.8rem;
            color: #f8f9fa;
        }

        .alert {
            border-radius: 10px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="login-card text-center">
        <img src="<?= base_url('images/logo.jpg') ?>" class="logo mb-3" alt="Logo NKP">
        <h4>Selamat Datang</h4>
        <p class="mb-4">Silakan login untuk melanjutkan</p>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= esc(session()->getFlashdata('error')) ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('admin/login') ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group mb-4">
                <i class="fa fa-user input-icon"></i>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group mb-4">
                <i class="fa fa-lock input-icon"></i>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="footer text-center mt-4">
            &copy; <?= date('Y') ?> PT. Nusamas Kimia Persada
        </div>
    </div>

    <script src="<?= base_url('assets/js/core/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>