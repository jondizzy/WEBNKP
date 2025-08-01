<?= $this->extend('/pages/admin/admin_template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Berita PT. Nusamas Kimia Persada</h2>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="input-group" style="max-width: 400px;">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Cari Judul Berita..." id="searchInput">
        </div>
        <a href="<?= base_url('admin/add_news') ?>" class="btn btn-success">
            <i class="fas fa-plus"></i> Tambah Berita
        </a>
    </div>

    <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th style="width: 50px;">No</th>
                <th style="width: 150px;">Foto Berita</th>
                <th>Judul Berita</th>
                <th style="width: 100px;">Aksi</th>
            </tr>
        </thead>
        <tbody id="newsTable">
            <?php if (!empty($news)) : ?>
                <?php $no = 1;
                foreach ($news as $item) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <img src="<?= base_url('images/news/' . $item['image_url']) ?>"
                                alt="<?= esc($item['title']) ?>"
                                class="img-fluid"
                                style="max-height: 100px;">
                        </td>
                        <td><?= esc($item['title']) ?></td>
                        <td>
                            <a href="<?= base_url('admin/edit_news/' . $item['id_news']) ?>" class="text-primary me-2">
                                <i class="fas fa-pen fa-lg"></i>
                            </a>
                            <a href="<?= base_url('admin/delete_news/' . $item['id_news']) ?>" class="text-danger" onclick="return confirm('Yakin ingin menghapus berita ini?');">
                                <i class="fas fa-trash fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">Tidak ada berita.</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>

<script>
    // Optional: Fitur pencarian sederhana di sisi client
    document.getElementById("searchInput").addEventListener("keyup", function() {
        const value = this.value.toLowerCase();
        const rows = document.querySelectorAll("#newsTable tr");
        rows.forEach(row => {
            const title = row.querySelector("td:nth-child(3)");
            if (title && title.textContent.toLowerCase().includes(value)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
</script>

<?= $this->endSection() ?>