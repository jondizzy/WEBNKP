<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
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
</style>


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

<div class="news-list">
    
</div>
<?= $this->endSection() ?>