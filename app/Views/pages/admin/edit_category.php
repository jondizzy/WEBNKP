<?= $this->extend('/pages/admin/admin_template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Edit Kategori</h2>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/update_category/' . $category['category_id']) ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="name" class="form-control" value="<?= esc($category['name']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('admin/AdminCategory') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection() ?>