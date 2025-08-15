<?= $this->extend('/pages/admin/admin_template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Kategori Produk Nusamas Kimia Persada</h2>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="input-group" style="max-width: 400px;">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Cari Nama Kategori..." id="searchInput">
        </div>
        <a href="<?= base_url('admin/add_category') ?>" class="btn btn-success">
            <i class="fas fa-plus"></i> Tambah Kategori
        </a>
    </div>

    <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th style="width: 50px;">No</th>
                <th>Nama Kategori</th>
                <th style="width: 80px;">Aksi</th>
            </tr>
        </thead>
        <tbody id="newsTable">
            <?php if (!empty($category)) : ?>
                <?php $no = 1;
                foreach ($category as $item) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="text-start"><?= esc($item['name']) ?></td>
                        <td>
                            <a href="<?= base_url('admin/edit_category/' . $item['category_id']) ?>" class="text-primary me-2 action-icon">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="<?= base_url('admin/delete_category/' . $item['category_id']) ?>" class="text-danger action-icon" onclick="return confirm('Yakin ingin menghapus kategori ini?');">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr>
                    <td colspan="3">Tidak ada kategori.</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>

    <style>
        .action-icon {
            display: inline-block;
            margin: 0 3px;
        }

        @media (max-width: 576px) {
            .action-icon i {
                font-size: 12px;
            }
        }
    </style>

</div>

<script>
    document.getElementById("searchInput").addEventListener("keyup", function() {
        const value = this.value.toLowerCase();
        const rows = document.querySelectorAll("#newsTable tr");
        rows.forEach(row => {
            const name = row.querySelector("td:nth-child(2)");
            if (name && name.textContent.toLowerCase().includes(value)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
</script>

<?= $this->endSection() ?>