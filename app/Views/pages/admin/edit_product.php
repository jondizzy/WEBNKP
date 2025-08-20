<?= $this->extend('/pages/admin/admin_template') ?>
<?= $this->section('content') ?>


<div class="container mt-4">
    <h2 class="text-center mb-4">Edit product</h2>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/updateproduct/' . $product['product_id']) ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= esc($product['nama']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="<?= esc($product['deskripsi']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Spesifikasi</label>
            <textarea name="spesifikasi" class="form-control" rows="5" required><?= esc($product['spesifikasi']) ?></textarea>
        </div>
        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                <?php foreach ($categories as $cat): ?>
                    <option value="<?= esc($cat['category_id']) ?>"
                        <?= ($cat['category_id'] == $product['category_id']) ? 'selected' : '' ?>>
                        <?= esc($cat['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Gambar Saat Ini:</label><br>
            <img src="<?= base_url('images/product/' . $product['img_url']) ?>" style="max-width: 200px;" alt="">
        </div>
        <div class="mb-3">
            <label>Ganti Gambar (Opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection() ?>