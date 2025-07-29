<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .news-detail {
        padding: 20px;
        align-items: center;
    }

    .news-desc {
        padding-left: 5%;
        padding-right: 5%;
    }

    .back-button {
        background-color: #080761;
        color: white;
        border: none;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #080761;
    }

    .button {
        padding-left: 8%;
        padding-top: 5%;
        padding-bottom: 5%;
    }
</style>

<div class="news-detail">
    <img src="<?= base_url('images/news/' . esc($news['image_url'])) ?>" alt="" width="100%">
</div>

<div class="news-desc">
    <h2><?= esc($news['title']) ?></h2>
    <p><?= esc($news['date_posted']) ?></p>
    <p><?= nl2br(esc($news['description'])) ?></p>
</div>

<div class="button">
    <button class="back-button" onclick="history.back()">←</button>
</div>

<?= $this->endSection() ?>