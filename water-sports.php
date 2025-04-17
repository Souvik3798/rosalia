<?php include 'include/header.php'; ?>

<style>
    /* Banner Section */
    .bg-water-sports {
        background-image: url('https://www.marinacarleton.com/wp-content/uploads/2020/08/Water-Sports-And-Their-Marvellous-Merits.jpg');
        height: 500px;
        /* Adjust this height as needed */
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
        background: rgba(0, 0, 0, 0.4);
        /* Overlay to darken the banner for text readability */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner-title {
        font-size: 42px;
        /* Adjust size as needed */
        color: #fff;
        font-weight: 700;
        text-align: center;
    }


    /* SEO Quote Section */
    .seo-quote {
        padding: 30px 0;
        /* Increased padding for better separation */
        background-color: #f5f5f5;
        text-align: center;
    }

    .quote-text {
        font-size: 20px;
        color: #555;
        margin: 0;
        max-width: 800px;
        /* Limit the width for better readability */
        margin: 0 auto;
    }

    /* Ticket Card Style */
    .ticket-container {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        /* Increased gap for spacing */
        justify-content: center;
        margin-top: 120px;
        /* Additional space above the cards */
    }

    .ticket-card {
        width: 350px;
        /* Increased width for larger card size */
        background-color: white;
        border-radius: 12px;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        padding-bottom: 25px;
    }

    .ticket-image {
        width: 100%;
        height: 0;
        padding-top: 100%;
        /* Square aspect ratio */
        background-size: cover;
        background-position: center;
    }

    .ticket-content h3 {
        font-size: 22px;
        color: #333;
        margin: 15px 0;
    }

    .ticket-price {
        font-size: 26px;
        color: #59c45a;
        margin: 5px 0;
    }

    /* Book Now Button */
    .ticket-content .awe-btn {
        margin-top: 15px;
    }

    @media (max-width: 768px) {
        .bg-water-sports {
            margin-top: -50px;
            width: 100%;
        }
    }
</style>

<!-- Banner Section -->
<section class="sub-banner">
    <div class="bg-water-sports">
        <div class="banner-overlay">
            <h1 class="banner-title">Water Sports Activities</h1>
        </div>
    </div>

</section>

<!-- SEO Quote Section -->
<section class="seo-quote">
    <div class="container">
        <p class="quote-text">"Discover the thrill of water sports in Andaman! From scuba diving to sea walking, immerse yourself in unforgettable adventures with Rosalia Travel."</p>
    </div>
</section>

<!-- Main Content -->
<div class="main">
    <div class="container">
        <div class="main-cn element-page bg-white clearfix">
            <section class="entry-tickets-section">
                <div class="ticket-container">
                    <?php
                    // Example data for water sports activities
                    $water_sports = [
                        ["Scuba Diving", "3500", "https://www.girlsthatscuba.com/wp-content/uploads/2017/04/can-Indians-scuba-dive.jpg"],
                        ["Kayaking", "3500", "https://res.cloudinary.com/gofjords-com/images/w_2560,h_1707,c_scale/f_auto,q_auto:eco/v1683890721/Experiences/XXLofoten/Kayaking/Evening%20kayaking%202020/Evening-kayaking-Svolvaer-Lofoten-XXlofoten-1/Evening-kayaking-Svolvaer-Lofoten-XXlofoten-1.jpg?_i=AA"],
                        ["Glass Bottom Boat", "1000", "https://sunpyramidtours.com/storage/media/tours/glass-bottom-boat-cruise-and-coral-reef-viewing-start-from-40/Tm4FYkOAab8jKIes3L6pYemnsA8N8Cb86WFaw0Rp.webp"],
                        ["Sea Walk", "3500", "https://traveldeandaman.com/wp-content/uploads/2022/06/seawalk-copy-1024x683.jpg"],
                        ["Snorkelling", "1100", "https://res.cloudinary.com/simplotel/image/upload/x_0,y_391,w_4167,h_2344,r_0,c_crop,q_80,fl_progressive/w_500,f_auto,c_fit/barefoot-at-havelock/Barefoot_-_Snorkeling_yrbsh4_1_hfk7np"],
                        ["Speed Boat Rides", "870", "https://cocohouseboatskerala.com/wp-content/uploads/2023/07/speed-boats-alpy-500x360.jpg"],
                        ["Parasailing", "3000", "https://res.cloudinary.com/manawa/image/upload/f_auto,c_limit,w_3840,q_auto/articles/all-you-need-to-know-about-parasailing/AnfiDelMar_Parasailing_WATERSPORTSLUISMOLINA_igaiko"],
                        ["Trekking", "1300", "https://www.andamanislands.com/uploads/andamanislands/gallery/main/8207f0ee929d85905ffe362a7dd4c437_143.jpg"]
                    ];

                    foreach ($water_sports as $sport) {
                        echo "<div class='ticket-card'>
                                <div class='ticket-image' style='background-image: url({$sport[2]});'></div>
                                <div class='ticket-content'>
                                    <h3>{$sport[0]}</h3>
                                    <p class='ticket-price'>₹{$sport[1]}</p>
                                    <a href='https://wa.me/918900943735?text=" . urlencode("I'm interested in booking the {$sport[0]} water sports activity.") . "' class='awe-btn awe-btn-medium awe-search'>Book Now</a>
                                </div>
                            </div>";
                    }
                    ?>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>