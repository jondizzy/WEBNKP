<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
    .client-detail {
        padding: 60px 20px;
        background-color: #f9f9f9;
    }

    .client-header h1 {
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .client-location {
        font-size: 1.2rem;
        color: #777;
        margin-bottom: 1.5rem;
    }

    .client-image {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .client-description {
        font-size: 1.1rem;
        margin-top: 2rem;
        line-height: 1.6;
    }

    @media (min-width: 768px) {
        .client-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .client-text {
            flex: 1;
        }

        .client-image-wrapper {
            flex: 1;
        }
    }
</style>

<div class="client-detail container">
    <div class="client-header text-center mb-5">
        <h1><?= esc($client['title']) ?></h1>
        <div class="client-location"><?= esc($client['location']) ?></div>
    </div>

    <div class="client-content">
        <div class="client-image-wrapper text-center">
            <img src="<?= esc($client['image']) ?>" alt="<?= esc($client['title']) ?>" class="client-image">
        </div>
        <div class="client-text">
            <div class="client-description">
                <?= esc($client['description']) ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>