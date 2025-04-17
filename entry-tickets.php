<?php include 'include/header.php'; ?>

<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Lato', sans-serif;
        color: #333;
        background-color: #f9f9f9;
    }

    /* Banner Section */
    .banner-section {
        position: relative;
        background: url('https://www.shutterstock.com/image-vector/vector-ticket-one-stub-rip-260nw-2389943611.jpg') no-repeat center center/cover;
        height: 500px;
        text-align: center;
        color: #fff;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .banner-section h1 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .banner-section p {
        font-size: 18px;
        margin-top: 0;
    }

    /* Entry Ticket Section */
    .entry-ticket-section {
        padding: 40px 0;
    }

    .entry-ticket-section .container {
        max-width: 1200px;
        margin: auto;
    }

    .entry-ticket-section .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Ticket Card */
    .ticket-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 100%;
        max-width: 300px;
        margin: 15px;
        text-align: center;
        transition: box-shadow 0.3s ease;
    }

    .ticket-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .ticket-image {
        width: 100%;
        height: 200px; /* Fixed height for all images */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .ticket-card h3 {
        font-size: 20px;
        color: #333;
        margin-top: 15px;
        padding: 0 10px;
    }

    .ticket-card .price {
        font-size: 24px;
        font-weight: bold;
        color: #59c45a;
        margin: 10px 0;
    }

    .btn-book-now {
        display: inline-block;
        padding: 10px 20px;
        background-color: #59c45a;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-weight: 600;
        transition: background-color 0.3s ease;
        margin-bottom: 15px;
    }

    .btn-book-now:hover {
        background-color: #4ca64c;
        text-decoration: none;
        color: #fff;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .ticket-card {
            width: 300px;
        }
        
        .ticket-image {
            height: 200px;
        }
    }

    @media (max-width: 768px) {
        .ticket-card {
            width: 300px;
            margin: 15px auto; /* Center cards */
        }

        .ticket-image {
            height: 200px;
        }

        .banner-section h1 {
            font-size: 28px;
        }

        .banner-section p {
            font-size: 16px;
        }
    }
</style>

<!-- Banner Section -->
<div class="banner-section">
    <div class="banner-overlay">
        <h1>Entry Tickets</h1>
        <p>Explore various entry tickets for attractions in Andaman & Nicobar Islands</p>
    </div>
</div>

<!-- Main Content -->
<div class="entry-ticket-section">
    <div class="container">
        <div class="row">
            <!-- Ticket Cards -->
            <?php
            $tickets = [
                ["Light & Sound Show", "₹300", "https://cxotoday.com/wp-content/uploads/2023/05/Cellular-Jail-Pic-2.jpg"],
                ["Ross Island Boat Ticket", "₹370", "https://im.hunt.in/cg/Port-Blair/City-Guide/ross1.jpg"],
                ["North Bay & Ross Island Boat Ticket", "₹870", "https://www.go2andaman.com/wp-content/uploads/2021/01/Northbay_island_go2andaman1-550x413-1.jpg"],
                ["Jolly Bouy Island", "₹850", "https://www.andamantourism.org/wp-content/uploads/2024/08/Jolly-Buoy-4.jpg"],
                ["Chatham Island & Sawmill", "₹10", "https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Chatham_Saw_Mill_02.jpg/1200px-Chatham_Saw_Mill_02.jpg"],
                ["Samudrika Marine Museum", "₹50", "https://www.mountainedge.in/images-new/top-locations/samudrika-andaman.jpg"],
                ["Anthropological Museum", "₹20", "https://www.enchantingandamans.com/img/places/Anthropological-Museum.jpg"],
                ["Cellular Jail - National Memorial", "₹30", "https://upload.wikimedia.org/wikipedia/commons/f/fe/Front_View_of_Cellular_Jail%2C_Port_Blair.JPG"],
                ["Fisheries Museum", "₹20", "https://www.andamanislands.com/uploads/andamanislands/attachchments/main/610a7b65132c1136_marine-life-park-andaman.jpg"],
                ["Baratang Island Live Boat Ticket", "₹1000", "https://www.andamanislands.com/uploads/andamanislands/blog/main/602131df3fada106_travel-guide-to-baratang-island.jpg"],
                ["Diglipur Island Ross Smith Boat", "₹1000", "https://www.andamanislands.com/uploads/andamanislands/attachchments/main/6167ff63ede8e112_8-2.png"],
                ["Elephanta Havelock", "₹1000", "https://www.andamanisland.in/uploads/andamanislands/attachchments/main/61c959f12f9bd107_e3.jpg"]
            ];

            foreach ($tickets as $ticket) {
                echo "
                    <div class='col-md-4'>
                        <div class='ticket-card'>
                            <div class='ticket-image' style='background-image: url({$ticket[2]});'></div>
                            <h3>{$ticket[0]}</h3>
                            <p class='price'>{$ticket[1]}</p>
                            <a href='https://wa.me/918900943735?text=" . urlencode("I'm interested in booking the {$ticket[0]} ticket.") . "' class='btn-book-now'>Book Now</a>
                        </div>
                    </div>
                    ";
            }
            ?>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>