<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
  h2 {
    font-size: 2em;
    margin-bottom: 30px;
  }

  table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 30px;
    /* Jarak antar baris */
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
  }

  td {
    vertical-align: top;
    padding: 20px;
  }

  .news-image {
    width: 250px;
  }

  .news-image img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    object-fit: cover;
  }

  .news-content {
    padding-left: 20px;
  }

  .news-category {
    color: red;
    font-weight: bold;
    font-size: 0.9em;
    margin-bottom: 5px;
  }

  .news-title {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .news-description {
    font-size: 1em;
    color: #555;
    margin-bottom: 10px;
  }

  .news-date {
    font-size: 0.9em;
    color: #999;
  }

  @media screen and (max-width: 700px) {

    table,
    tr,
    td {
      display: block;
      width: 100%;
    }

    .news-content {
      padding-left: 0;
      margin-top: 15px;
    }

    .news-image {
      width: 100%;
    }
  }
</style>

<section>
  <table>
    <?php if (!empty($news)) : ?>
      <?php foreach ($news as $item) : ?>
        <tr>
          <td class="news-image">
            <img src="<?= base_url('images/news/' . $item['image_url']) ?>" alt="<?= esc($item['title']) ?>">
          </td>
          <td class="news-content">
            <div class="news-category"><?= esc($item['category']) ?></div>
            <a href="<?= base_url('/newsdetail/' . $item['id_news']) ?>">
              <div class="news-title"><?= esc($item['title']) ?></div>
            </a>
            <div class="news-description">
              <?= esc(strlen($item['description']) > 150 ? substr(strip_tags($item['description']), 0, 150) . '...' : $item['description']) ?>
            </div>
            <div class="news-date"><?= date('d M Y', strtotime($item['date_posted'])) ?></div>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else : ?>
      <tr>
        <td colspan="2" style="text-align:center;">Tidak ada berita.</td>
      </tr>
    <?php endif; ?>
  </table>
</section>


<?= $this->endSection() ?>