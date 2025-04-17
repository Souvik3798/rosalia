<?php include 'include/header.php'; ?>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    /* Header Banner */
    /* General Styles */
    body {
        font-family: 'Open Sans', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }

    /* Header Banner */
    .about-header {
        text-align: center;
        padding: 100px 20px;
        background: url('https://t3.ftcdn.net/jpg/01/28/44/76/360_F_128447604_6deYSrg6bgH2F3YaoU0icdhvxNu4ReDN.jpg') no-repeat center center/cover;
        color: white;
        position: relative;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.5);
    }

    .about-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .about-header h1 {
        font-size: 3em;
        margin: 0;
        position: relative;
        z-index: 1;
        font-weight: bold;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        animation: fadeInDown 1s ease-out;
    }

    .about-header p {
        font-size: 1.3em;
        position: relative;
        z-index: 1;
        margin-top: 10px;
        animation: fadeInUp 1s ease-out;
    }

    /* Section Titles */
    .section-title {
        font-size: 2em;
        color: #59c45a;
        display: flex;
        align-items: center;
        gap: 10px;
        text-align: center;
        justify-content: center;
        margin-bottom: 30px;
    }

    .section-title i {
        font-size: 1.5em;
        color: #59c45a;
    }

    /* About Container */
    .about-container {
        max-width: 1100px;
        margin: 20px auto;
        padding: 40px 40px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Card Container */
    .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-around;
        padding: 20px 0;
    }

    /* Card Styling */
    .card {
        background: #f9f9f9;
        border-radius: 8px;
        padding: 30px;
        width: 100%;
        max-width: 240px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        animation: fadeIn 1s ease forwards;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .card i {
        font-size: 2em;
        color: #59c45a;
        margin-bottom: 15px;
    }

    .card h3 {
        font-size: 1.2em;
        font-weight: 600;
        color: #333;
        margin: 10px 0;
    }

    .card p {
        font-size: 1em;
        color: #666;
    }

    /* Contact Info */
    .contact-info p {
        font-size: 1.1em;
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 5px 0;
        color: #333;
    }

    .contact-info p i {
        color: #59c45a;
        font-size: 1.5em;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .card-container {
            flex-direction: column;
            align-items: center;
        }

        .card {
            max-width: 100%;
        }
    }
</style>


<div class="about-header">
    <h1>Welcome to Rosalia Travels</h1>
    <p>Your premier travel agency dedicated to exceptional experiences in the breathtaking Andaman Islands.</p>
</div>

<div class="about-container">
    <section class="about-section">
        <h2 class="section-title"><i class="fas fa-globe"></i> Our Mission</h2>
        <p>At Rosalia Travels, we strive to make your travel dreams a reality by offering personalized travel solutions tailored to your needs. With years of experience in the travel industry, our passionate team is committed to ensuring every aspect of your journey is seamless and enjoyable.</p>
    </section>

    <section class="services">
        <h2 class="section-title"><i class="fas fa-concierge-bell"></i> Our Services</h2>
        <div class="card-container">
            <div class="card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Customized Travel Itineraries</h3>
                <p>We design itineraries tailored to your preferences and travel goals, ensuring a memorable experience.</p>
            </div>
            <div class="card">
                <i class="fas fa-bed"></i>
                <h3>Hotel Bookings</h3>
                <p>Comfortable and affordable accommodations to make your stay relaxing and enjoyable.</p>
            </div>
            <div class="card">
                <i class="fas fa-hiking"></i>
                <h3>Excursions and Tours</h3>
                <p>Explore breathtaking locations with guided tours that offer insight and adventure.</p>
            </div>
            <div class="card">
                <i class="fas fa-water"></i>
                <h3>Water Sports</h3>
                <p>Enjoy thrilling water sports activities that are safe and unforgettable.</p>
            </div>
            <!-- Add more cards as needed -->
        </div>
    </section>


    <section class="commitment">
        <h2 class="section-title"><i class="fas fa-heart"></i> Our Commitment</h2>
        <p>We pride ourselves on our commitment to customer satisfaction. Our goal is to provide you with unforgettable memories while ensuring your comfort and safety throughout your journey.</p>
    </section>

    <section class="contact-info">
        <h2 class="section-title"><i class="fas fa-phone-alt"></i> Contact Us</h2>
        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:rosaliatravels1@gmail.com">rosaliatravels1@gmail.com</a></p>
        <p><i class="fas fa-phone"></i> Mobile: 7063943110, 918900943735</p>
        <p><i class="fas fa-map-marker-alt"></i> Address: Flat no C-44/1, Kamaraj Nagar, Beside Panchayat water pump, Birdline, PO Calicut Sri Vijayapuram (Port Blair) 744105</p>
    </section>
</div>




<?php include 'include/footer.php'; ?>