<?= $this->extend('/pages/admin/admin_template') ?>
<?= $this->section('content') ?>
<h2>Add Product</h2>

<form action="<?= base_url('admin/add-product') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Spesifikasi</label>
        <textarea name="spesifikasi" class="form-control" rows="5" required></textarea>
    </div>

    <div class="form-group">
        <label for="label">ProductCategory</label>
        <select id="category_id" name="category_id">
            <option value="1">Food</option>
        </select>
    </div>

    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="image" class="form-control-file" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>

<?= $this->endSection() ?>