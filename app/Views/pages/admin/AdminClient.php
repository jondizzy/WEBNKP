<?= $this->extend('/pages/admin/admin_template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Client PT. Nusamas Kimia Persada</h2>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="input-group" style="max-width: 400px;">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Cari Client..." id="searchInput">
        </div>
        <a href="<?=base_url(relativePath: 'admin/add_client') ?>" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Client
        </a>
    </div>

    <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th style="width: 50px;">No</th>
                <th style="width: 150px;">Foto/Logo Client</th>
                <th>Nama Perusahaan Client</th>
                <th style="width: 150px;">Negara Asal Client</th>
            </tr>
        </thead>
        <tbody id="clientTable">
            <?php if (!empty($clients)) : ?>
                <?php $no = 1;
                foreach ($clients as $item) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <img src="<?= base_url('images/client/' . $item['logo_url']) ?>"
                                alt="<?= esc($item['client_name']) ?>"
                                class="img-fluid"
                                style="max-height: 100px;">
                        </td>
                        <td><?= esc($item['client_name']) ?></td>
                        <td>
                            <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true"><?= esc(data: $item['client_country'])?></div> <!-- HARUSNYA KE DEFINE DI ADMIN_TEMPLATE-->
                        </td>
                        <td>
                            <a href="<?= base_url(relativePath: 'admin/edit_client/' . $item['id_client']) ?>" class="text-primary me-2">
                                <i class="fas fa-pen fa-lg"></i>
                            </a>
                            <a href="<?= base_url(relativePath: 'admin/delete_client' .$item['id_cleint'])?>" class="text-danger" onclick="return confirm('Yakin ingin menghapus client ini?');">
                                <i class="fas fa-trash fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr>
                    <td colspan="3">Tidak ada client.</td>
                </tr>
            <?php endif ?>


        </tbody>

    </table>

</div>

<?= $this->endSection() ?>