<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .news-detail{
        padding: 20px;
        align-item: center;
    }
    .news-desc{
        padding-left: 5%;
    }
    .back-button {
            background-color: #080761; /* Green background */
            color: white;              /* White text */
            border: none;              /* No border */
            padding: 15px 30px;        /* Padding */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;        /* Rounded corners */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #080761; /* Darker green on hover */
        }
        .button{
            padding-left: 8%;
            padding-top: 5%;
            padding-bottom:5%;
        }  
</style>
<div class="news-detail"> 
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTziefzCfvRrCdx2Qep9Y_XxxqyUdX9u4sqSg&s" alt="" width = "100%">
</div>
<div class="news-desc">
    <h2>Judul News</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat aperiam sunt amet pariatur deserunt, id voluptatem dignissimos quod neque libero iste beatae. Iure suscipit magnam assumenda laudantium nobis. Rem, qui!
    </p>

</div>
<div class="button"><button class="back-button" onclick="history.back()">←</button></div>

<?= $this->endSection() ?>