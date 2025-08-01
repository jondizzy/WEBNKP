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
      border-spacing: 0 30px; /* Jarak antar baris */
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
      table, tr, td {
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
<!-- news bagus -->
<section>
    <table>
    <tr>
      <td class="news-image">
        <img src="https://media.suara.com/pictures/653x366/2015/03/08/o_19fs2rkpdf91i3r3eeudcktka.jpg" alt="gambar1">
      </td>
      <td class="news-content">
        <div class="news-category">News</div>
        <a href="<?= base_url('/newsdetail') ?>"><div class="news-title">berita 1</div> </a>
        <div class="news-description">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum dolores alias placeat qui corrupti. Necessitatibus totam reiciendis ad nobis, aut beatae illo ullam magnam ea nesciunt nulla officiis aperiam nostrum.
        </div>
        <div class="news-date">29 Jul 2025</div>
      </td>
    </tr>

    <tr>
      <td class="news-image">
        <img src="https://i.ytimg.com/vi/oQ21AH3SPLw/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBBpGkh4DCvNi8D_6TQlBiUaaCUhg" alt="gambar1">
      </td>
      <td class="news-content">
        <div class="news-category">News</div>
        <div class="news-title">berita 2</div>
        <div class="news-description">
          deskripsi dari berita 2
        </div>
        <div class="news-date">28 Jul 2025</div>
      </td>
    </tr>
  </table>
</section>

    
<?= $this->endSection() ?>