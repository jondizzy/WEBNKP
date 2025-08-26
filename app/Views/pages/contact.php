<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .contact-2 img {
        width: 100vw;
        height: 30vw;
        max-width: 100%;
    }

    .contact-container {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        padding: 5%;
    }

    .contact-text {
        flex: 1;
        min-width: 300px;
        padding-left: 5%;
    }

    .contact-form {
        flex: 1;
        min-width: 300px;
        padding-right: 5%;
    }

    h2 {
        font-size: 1.8em;
        margin-bottom: 20px;
    }

    h3 {
        font-size: 1.2em;
        margin-top: 20px;
    }

    p {
        margin: 8px 0;
    }

    .icon {
        display: inline-block;
        margin-right: 8px;
    }

    .get-direction {
        color: red;
        text-decoration: none;
        font-weight: bold;
    }

    .form-box {
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .form-box label {
        display: block;
        font-weight: bold;
        margin: 15px 0 5px;
    }

    .form-box input[type="text"],
    .form-box input[type="email"],
    .form-box textarea {
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 1em;
    }

    .submit-button {
        background-color: #080761;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 6px;
        font-size: 1em;
        cursor: pointer;
        width: 100%;
        margin-top: 20px;
    }

    @media screen and (max-width: 768px) {
        .contact-container {
            flex-direction: column;
        }
    }
</style>

<section>
    <!-- banner -->
    <div class="contact-2">
        <img src="https://t3.ftcdn.net/jpg/05/89/92/50/360_F_589925063_ecQvtkwNAEnB7Nd9ad3hM7GOP0lae694.jpg" alt="banner">
    </div>

    <!-- contact content -->
    <div class="contact-container">
        <div class="contact-text">
            <h2>Contact Us</h2>
            <h3>Head Office</h3>
            <p>BSD Junction, Jl. Pahlawan Seribu No.48A Blok A, BSD City, Kec. Serpong, Kota Tangerang Selatan, Jawa Barat 15322</p>
            <p><span class="icon">📞</span> (021) 53165830</p>
            <p><span class="icon">✉️</span> info@nusamas.com</p>
        </div>

        <!-- contact form -->
        <div class="contact-form">
            <div class="form-box">
                <h2>Send Us Message</h2>

                <!-- success & error messages -->
                <?php if (session()->getFlashdata('success')): ?>
                    <div style="color: green;"><?= session()->getFlashdata('success') ?></div>
                <?php elseif (session()->getFlashdata('error')): ?>
                    <div style="color: red;"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>

                <form method="post" action="<?= site_url('contact/send') ?>">
                    <?= csrf_field() ?>

                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Full Name" required>

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>

                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" placeholder="Subject" required>

                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4" placeholder="Message" required></textarea>

                    <button class="submit-button" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>