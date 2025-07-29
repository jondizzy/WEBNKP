<?= $this->extend('/pages/admin/admin_template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Edit Berita</h2>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/update_news/' . $news['id_news']) ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="category" class="form-control" value="<?= esc($news['category']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="<?= esc($news['title']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="5" required><?= esc($news['description']) ?></textarea>
        </div>
        <div class="mb-3">
            <label>Gambar Saat Ini:</label><br>
            <img src="<?= base_url('images/news/' . $news['image_url']) ?>" style="max-width: 200px;" alt="">
        </div>
        <div class="mb-3">
            <label>Ganti Gambar (Opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('admin/AdminNews') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection() ?>