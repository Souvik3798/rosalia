<?php include 'include/header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* Banner Styling */
    .bg-contact {
        background-image: url('https://st2.depositphotos.com/4021139/7595/i/450/depositphotos_75953359-stock-photo-contact-us-concept.jpg');
        /* Add your background image here */
        height: 300px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner-title {
        font-size: 36px;
        color: #fff;
        font-weight: 700;
    }

    /* Contact Information Styling */
    .contact-info {
        text-align: center;
        padding: 30px 0;
    }

    .contact-info h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .info-cards {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .info-card {
        background: #f9f9f9;
        padding: 20px;
        width: 300px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .info-card i {
        font-size: 36px;
        color: #59c45a;
        margin-bottom: 10px;
    }

    .info-card h3 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .info-card p {
        font-size: 16px;
        color: #555;
    }

    .info-card a {
        color: inherit;
        text-decoration: none;
    }

    /* Contact Form Styling */
    .contact-form {
        padding: 40px 0;
        background-color: #f3f3f3;
    }

    .contact-form .container {
        max-width: 600px;
        margin: 0 auto;
    }

    .contact-form h2 {
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    .contact-form .form-group {
        margin-bottom: 15px;
    }

    .contact-form label {
        display: block;
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
    }

    .contact-form label i {
        margin-right: 5px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .contact-form button.btn-submit {
        display: inline-flex;
        align-items: center;
        background-color: #59c45a;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .contact-form button.btn-submit:hover {
        background-color: #4ca64e;
    }

    .contact-form button i {
        margin-right: 5px;
    }

    /* Map Section Styling */
    .map-section {
        padding: 30px 0;
    }
</style>

<!-- Banner -->
<div class="bg-contact">
    <div class="banner-overlay">
        <h1 class="banner-title">Contact Us</h1>
    </div>
</div>

<!-- Contact Information Section -->
<section class="contact-info">
    <div class="container">
        <h2>Get in Touch</h2>
        <div class="info-cards">
            <div class="info-card">
                <i class="fas fa-envelope"></i>
                <h3>Email Us</h3>
                <p><a href="mailto:rosaliatravels1@gmail.com">rosaliatravels1@gmail.com</a></p>
            </div>
            <div class="info-card">
                <i class="fas fa-phone"></i>
                <h3>Call Us</h3>
                <p><a href="tel:+917063943110">7063943110</a>, <a href="tel:+918900943735">918900943735</a></p>
            </div>
            <div class="info-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Visit Us</h3>
                <p>Flat no C-44/1, Kamaraj Nagar, Beside Panchayat water pump, Birdline, PO Calicut Sri Vijayapuram (Port Blair) 744105</p>
            </div>
        </div>
    </div>
</section>

<!-- Google Map Embed -->
<section class="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.26733998245518!2d92.72890182409765!3d11.603558719986374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x308895db1b986e45%3A0xe47334fddf204bb!2sRosalia%20Travel!5e0!3m2!1sen!2sin!4v1730568462468!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Contact Form Section -->
    <section class="contact-form">
        <div class="container">
            <h2>Send Us a Message</h2>
            <form action="processContact.php" method="POST">
                <div class="form-group">
                    <label for="name"><i class="fas fa-user"></i> Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message"><i class="fas fa-comment"></i> Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i> Send Message</button>
            </form>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>