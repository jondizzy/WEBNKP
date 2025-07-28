<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .news{
        /* padding: 20px; */
    }
    .news-list{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 20px;
        padding: 20px;
    }
    .news-box{
        width: 30%;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        padding: 15px;
        transition: transform 0.3s ease;
    }
    .news-box img {
        width: 100%;
        border-radius: 8px;
    }
    .headline{
        padding-left: 20px;
    }
</style>
<section>
<div class= "news">

    <div class= "headline">
<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe enim, voluptatem, asperiores laudantium atque laboriosam consequuntur ducimus voluptatum sint voluptates, quod omnis maxime dignissimos modi odit facilis hic blanditiis? Tempora.

</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure distinctio ipsam, explicabo optio eius ex quod. Totam perferendis obcaecati minima sapiente nostrum consequuntur, ad repellat saepe voluptates quos, nobis possimus.

</p>
    </div>
<div class="news-container">
        <div class="news-list">
            <div class="news-box">
                <caption><h1><a href="<?= base_url('/newsdetail') ?>">Headline 1</a></h1></caption>
                <img src="https://i.pinimg.com/1200x/e2/b1/74/e2b174a73c532a5cb42941b270bca6b6.jpg" alt="Produk 1" width="300" height="250">                
            </div>
            <div class="news-box">
                <caption><h1>headline 2</h1></caption>
                <img src="https://i.pinimg.com/736x/e9/02/98/e9029828f5d19d9fd5b6db2b5d81ac5b.jpg" alt="Produk 1" width="300" height="250">                
            </div>
        </div>
    </div>
</div>


    
<?= $this->endSection() ?>