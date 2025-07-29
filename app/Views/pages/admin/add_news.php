<?= $this->extend('/pages/admin/admin_template') ?>

<?= $this->section('content') ?>
<h2>Tambah Berita</h2>

<form action="<?= base_url('admin/add-news') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="form-group">
        <label>Kategori</label>
        <input type="text" name="category" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control" rows="5" required></textarea>
    </div>

    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="image" class="form-control-file" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>

<?= $this->endSection() ?>