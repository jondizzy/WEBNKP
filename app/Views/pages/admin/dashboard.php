<?= $this->extend('/pages/admin/admin_template') ?>

<?= $this->section('content') ?>
<h3 class="mb-4">Selamat Datang Kembali</h3>
<p>Admin PT. Nusamas Kimia Persada</p>

<div class="row">
    <div class="col-md-3 mb-3">
        <div class="card text-white bg-info h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="fa fa-shopping-cart fa-2x mb-2"></i>
                <h5 class="mb-1">10</h5>
                <p class="mb-1">Products</p>
            </div>
            <div class="card-footer text-center bg-light">
                <a href="#" class="text-info text-decoration-none">View Details</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card text-white bg-info h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="fa fa-newspaper-o fa-2x mb-2"></i>
                <h5 class="mb-1">8</h5>
                <p class="mb-1">News</p>
            </div>
            <div class="card-footer text-center bg-light">
                <a href="#" class="text-info text-decoration-none">View Details</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card text-white bg-info h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                <i class="fa fa-building fa-2x mb-2"></i>
                <h5 class="mb-1">20</h5>
                <p class="mb-1">Client</p>
            </div>
            <div class="card-footer text-center bg-light">
                <a href="#" class="text-info text-decoration-none">View Details</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>