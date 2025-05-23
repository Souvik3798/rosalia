<?php include 'include/header.php'; ?>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Custom CSS -->
<style>
    :root {
        --primary-color: #59c45a;
        --secondary-color: #3d9c3e;
        --accent-color: #2b742c;
        --light-bg: #f8f9fa;
        --dark-bg: #1b4b1c;
        --text-light: #ffffff;
        --text-dark: #1b4b1c;
        --shadow: 0 2px 15px rgba(89, 196, 90, 0.1);
    }

    body {
        font-family: 'Poppins', sans-serif;
        line-height: 1.6;
        background-color: #f5f7fa;
        color: var(--text-dark);
    }

    .hero-section {
        background: linear-gradient(rgba(27, 75, 28, 0.6), rgba(27, 75, 28, 0.6)),
            url('images/andaman-hero.jpg') center/cover;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-light);
        text-align: center;
        padding: 0 20px;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        animation: fadeInDown 1s ease;
    }

    .hero-content p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto;
        animation: fadeInUp 1s ease;
    }

    .package-container {
        max-width: 1200px;
        margin: -100px auto 0;
        padding: 20px;
        position: relative;
    }

    .overview-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .overview-card {
        background: var(--text-light);
        padding: 25px;
        border-radius: 15px;
        box-shadow: var(--shadow);
        text-align: center;
        transition: transform 0.3s ease;
    }

    .overview-card:hover {
        transform: translateY(-5px);
    }

    .overview-card i {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 15px;
    }

    .itinerary-timeline {
        position: relative;
        padding: 40px 0;
    }

    .timeline-item {
        background: var(--text-light);
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: var(--shadow);
        position: relative;
        transition: transform 0.3s ease;
    }

    .timeline-item:hover {
        transform: translateX(10px);
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -40px;
        top: 50%;
        width: 20px;
        height: 20px;
        background: var(--primary-color);
        border-radius: 50%;
    }

    .day-title {
        color: var(--primary-color);
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .inclusion-exclusion {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }

    .inclusion,
    .exclusion {
        background: var(--text-light);
        padding: 30px;
        border-radius: 15px;
        box-shadow: var(--shadow);
    }

    .inclusion h2,
    .exclusion h2 {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        color: var(--primary-color);
    }

    .points-list {
        list-style: none;
        padding: 0;
    }

    .points-list li {
        padding: 10px 0;
        padding-left: 30px;
        position: relative;
    }

    .points-list li::before {
        content: "→";
        position: absolute;
        left: 0;
        color: var(--primary-color);
    }

    .price-section {
        background: linear-gradient(135deg, var(--dark-bg), var(--primary-color));
        padding: 40px;
        border-radius: 15px;
        text-align: center;
        color: var(--text-light);
        margin: 40px 0;
    }

    .price-section h3 {
        font-size: 2.5rem;
        margin-top: 20px;
    }

    .notes-section {
        background: #e8f6e8;
        padding: 30px;
        border-radius: 15px;
        margin-top: 40px;
    }

    .cta-button {
        display: inline-block;
        padding: 15px 40px;
        background: greenyellow;
        /* Changed button color to a coral red */
        color: grey;
        text-decoration: none;
        border-radius: 30px;
        margin-top: 20px;
        transition: transform 0.3s ease;
    }

    .cta-button:hover {
        transform: scale(1.05);
        text-decoration: none;
        color: #fff;
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

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }

        .package-container {
            margin-top: -50px;
        }

        .timeline-item::before {
            display: none;
        }
    }
</style>

<div class="hero-section">
    <div class="hero-content">
        <h1>5 Nights 6 Days Historical Tour Itinerary</h1>
        <p>Explore the best of Andaman's historical sites and breathtaking beaches over 6 unforgettable days.</p>
    </div>
</div>

<div class="package-container">
    <div class="overview-cards">
        <div class="overview-card">
            <i class="fas fa-clock"></i>
            <h3>Duration</h3>
            <p>5 Nights 6 Days</p>
        </div>
        <div class="overview-card">
            <i class="fas fa-map-marked-alt"></i>
            <h3>Destinations</h3>
            <p>Port Blair, Havelock Island, Chidiyatapu</p>
        </div>
        <div class="overview-card">
            <i class="fas fa-hotel"></i>
            <h3>Accommodation</h3>
            <p>Standard & Luxury Hotels</p>
        </div>
        <div class="overview-card">
            <i class="fas fa-users"></i>
            <h3>Group Size</h3>
            <p>2+ People</p>
        </div>
    </div>

    <div class="itinerary-timeline">
        <div class="timeline-item">
            <h2 class="day-title"><i class="fas fa-plane-arrival"></i> Day 1: Arrival in Port Blair - Carbyn’s Cove Beach - Cellular Jail</h2>
            <p>Upon arrival, you’ll be welcomed and escorted to your hotel. Visit Carbyn’s Cove Beach and the historic Cellular Jail, followed by a light and sound show depicting the struggles of freedom fighters.</p>
        </div>

        <div class="timeline-item">
            <h2 class="day-title"><i class="fas fa-umbrella-beach"></i> Day 2: Port Blair - Havelock Island (Radhanagar Beach)</h2>
            <p>Take a ferry to Havelock Island and check into your hotel. Visit Radhanagar Beach, famed as the Best Beach in Asia by Times Magazine, before returning to your hotel for an overnight stay.</p>
        </div>

        <div class="timeline-item">
            <h2 class="day-title"><i class="fas fa-ship"></i> Day 3: Havelock Island - Kalapather Beach - Port Blair</h2>
            <p>After breakfast, visit Kalapather Beach, then return to Port Blair by ferry. Check into your hotel and relax overnight.</p>
        </div>

        <div class="timeline-item">
            <h2 class="day-title"><i class="fas fa-water"></i> Day 4: Ross Island & North Bay Coral Island</h2>
            <p>Take a full-day trip to Ross Island, the former British capital, and North Bay Coral Island. Explore historical ruins and vibrant corals through Glass Bottom Boat rides.</p>
        </div>

        <div class="timeline-item">
            <h2 class="day-title"><i class="fas fa-city"></i> Day 5: City Tour - Chidiyatapu Beach</h2>
            <p>Visit Chatham Saw Mill, Sagarika Emporium, and the Anthropological Museum. Conclude with a sunset at Chidiyatapu Beach before returning to your hotel.</p>
        </div>

        <div class="timeline-item">
            <h2 class="day-title"><i class="fas fa-plane-departure"></i> Day 6: Departure from Port Blair</h2>
            <p>After breakfast, you’ll be escorted to the airport for your return journey, carrying memories of a wonderful Andaman adventure.</p>
        </div>
    </div>

    <div class="inclusion-exclusion">
        <div class="inclusion">
            <h2><i class="fas fa-check-circle"></i> Package Inclusions</h2>
            <ul class="points-list">
                <li>Welcome drink upon arrival</li>
                <li>AC Accommodation on double sharing basis</li>
                <li>Daily breakfast</li>
                <li>Glass Bottom Boat Ride</li>
                <li>Ferry (Makruzz / Green Ocean/Govt. Ferry)</li>
                <li>Non-AC vehicle for transportation</li>
                <li>All required entry permits and tickets</li>
                <li>Arrival and departure assistance</li>
            </ul>
        </div>

        <div class="exclusion">
            <h2><i class="fas fa-times-circle"></i> Package Exclusions</h2>
            <ul class="points-list">
                <li>Personal expenses (tips, laundry, etc.)</li>
                <li>Domestic and International airfare</li>
                <li>Meals other than breakfast</li>
                <li>Optional activities (Jet Ski, Scuba diving, etc.)</li>
                <li>Guide and camera charges</li>
            </ul>
        </div>
    </div>

    <div class="price-section">
        <h2><i class="fas fa-tag"></i> Special Package Price</h2>
        <h3>₹46,000 per 2 person</h3>
        <a href="https://wa.me/918900943735?text=I%20want%20to%20book%20the%205%20Nights%206%20Days%20Historical%20Tour%20Package" class="cta-button" target="_blank">Book Now</a>
    </div>

    <div class="notes-section">
        <h2><i class="fas fa-sticky-note"></i> Important Notes</h2>
        <ul class="points-list">
            <li>Vehicles will be provided as per the itinerary</li>
            <li>Itinerary may change due to holidays or weather conditions</li>
            <li>No refunds for unused services</li>
            <li>Weather may affect some activities</li>
        </ul>
    </div>
</div>

<?php include 'include/footer.php'; ?>