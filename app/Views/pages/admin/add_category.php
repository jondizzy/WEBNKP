<?= $this->extend('/pages/admin/admin_template') ?>

<?= $this->section('content') ?>
<h2>Tambah Kategori</h2>

<form action="<?= base_url('admin/add-category') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="image" class="form-control-file" required>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>

<?= $this->endSection() ?>