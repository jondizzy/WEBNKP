<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- <style>
    .contact{
        display: flex;
        padding: 20px;
        margin: 20px auto;
        border: 1px solid #ccc;
        
    }
    .contact-container{
        border: 2px solid black;
        flex: 1;
        padding: 20px;
        border-right: 1px solid #ccc;
        align-items: space-between;
    }
    .contact-container label {
      display: block;
      font-weight: bold;
      margin-top: 20px;
    }
    .contact-container input,
    .contact-container textarea {
      width: 100%;
      border: none;
      border-bottom: 1px solid #000;
      padding: 5px 0;
      margin-top: 5px;
      outline: none;
      background-color: transparent;
    }
    .contact-container p {
      font-size: 14px;
      margin-bottom: 30px;
    }
</style> -->

<!-- <section>
    <div class="contact">
        <div class="contact-container">'
            <p>
            <img src="https://img.icons8.com/ios-filled/50/000000/new-post.png" alt="email icon">
            <strong>For More Information</strong><br>
            Test@nusamas.co.id
            </p>

            <form>
                <label for="name">Name</label>
                <input type="text" name="name" required>

                <label for="email">Email</label>
                <input type="email" name="email" required>

                <label for="phone">Phone</label>
                <input type="tel" name="phone" required>

                <label for="message">Message</label>
                <textarea name="message" rows="3" required></textarea>

                <br><br>
                <button type="submit">Send</button>
            </form>
        </div>
        <div class="contact-container">
            <img src="https://glints.com/id/lowongan/wp-content/uploads/2021/05/happy-smiling-operator-asian-woman-customer-service-agent-with-headsets_33413-181-1.jpg" alt="Call Center">
        </div>
    </div>
</section> -->
<style>
.contact-2 img {
    width: 100vw;
    height: 30vw;
    /* penuh 100% lebar layar */
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
.form-box select,
.form-box textarea {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1em;
}

.radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 10px;
}

.radio-group label {
    font-weight: normal;
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
        <img src="https://t3.ftcdn.net/jpg/05/89/92/50/360_F_589925063_ecQvtkwNAEnB7Nd9ad3hM7GOP0lae694.jpg"
            alt="banner">
    </div>
    <!--Contact text -->

    <div class="contact-container">
        <div class="contact-text">
            <h2>Contact Us</h2>
            <h3>Head Office</h3>
            <p>BSD Junction, Jl. Pahlawan Seribu No.48A Blok A, BSD City, Kec. Serpong, Kota Tangerang Selatan, Jawa
                Barat 15322</p>
            <p><span class="icon">📞</span> (021) 53165830</p>
            <p><span class="icon">✉️</span> info@nusamas.com</p>
        </div>

        <!--Contact Form -->
        <div class="contact-form">
            <div class="form-box">
                <h2>Send Us Message</h2>

                <!-- <label for="recipient">Recipient</label>
        <select id="recipient">
          <option>Sales</option>
          <option>Support</option>
          <option>Other</option>
        </select> -->

                <!-- <label>Categories</label>
        <div class="radio-group">
          <label><input type="radio" name="category"> Residential</label>
          <label><input type="radio" name="category"> Kavling</label>
          <label><input type="radio" name="category"> Commercial</label>
          <label><input type="radio" name="category"> Apartment</label>
        </div> -->

                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="Full Name">

                <!-- <label for="phone">Phone Number</label>
        <input type="text" id="phone" placeholder="+62"> -->

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Email">

                <label for="subject">Subject</label>
                <input type="text" id="subject" placeholder="Subject">

                <label for="message">Message</label>
                <textarea id="message" rows="4" placeholder="Message"></textarea>

                <button class="submit-button">Send</button>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>