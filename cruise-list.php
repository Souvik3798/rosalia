<?php include('include/header.php'); ?>

<style>
    /* General Styling */
    .main-cn.cruise-page.bg-white.clearfix::before,
    .main-cn.cruise-page.bg-white.clearfix::after {
        content: "";
        display: none;
        border: none;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Banner Styling */
    .sub-banner {
        position: relative;
        height: 150px;
        background: #59c45a;
    }

    @media (min-width: 768px) {
        .sub-banner {
            height: 200px;
        }
    }

    .sub-banner .bg-parallax {
        background: url('images/banner.jpg') no-repeat center center;
        background-size: cover;
        height: 100%;
        width: 100%;
    }

    .sub-banner .logo-banner {
        position: absolute;
        bottom: 20px;
        width: 100%;
    }

    .sub-banner .logo-banner img {
        max-height: 60px;
    }

    @media (min-width: 768px) {
        .sub-banner .logo-banner img {
            max-height: 80px;
        }
    }

    /* Container Styling */
    .main {
        padding: 15px;
    }

    @media (min-width: 768px) {
        .main {
            padding: 20px 0;
        }
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    /* Ferry List Title Styling */
    .ferry-list h2 {
        font-size: 1.5em;
        margin-bottom: 15px;
        text-align: center;
        color: #59c45a;
    }

    @media (min-width: 768px) {
        .ferry-list h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }
    }

    /* Table Styling */
    .ferry-table {
        margin-bottom: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    .ferry-table h3 {
        font-size: 1.3em;
        color: #59c45a;
        font-weight: bold;
        text-align: center;
        margin-bottom: 15px;
        background-color: #eaf9ea;
        padding: 10px;
        border-radius: 5px;
    }

    @media (min-width: 768px) {
        .ferry-table h3 {
            font-size: 1.8em;
        }
    }

    .ferry-table table {
        width: 100%;
        min-width: 800px; /* Ensures table doesn't get too squeezed */
        border-collapse: collapse;
        margin-bottom: 10px;
        background-color: #fff;
    }

    .ferry-table th,
    .ferry-table td {
        padding: 8px;
        text-align: center;
        border: 1px solid #ddd;
        font-size: 0.9em;
    }

    @media (min-width: 768px) {
        .ferry-table th,
        .ferry-table td {
            padding: 12px 15px;
            font-size: 1em;
        }
    }

    .ferry-table th {
        background-color: #59c45a;
        color: #fff;
        font-weight: 600;
        white-space: nowrap;
    }

    .ferry-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .ferry-table tr:hover {
        background-color: #eaf9ea;
    }

    /* Button Styling */
    .awe-btn {
        padding: 8px 12px;
        text-decoration: none;
        font-size: 0.85em;
        border-radius: 5px;
        color: #fff;
        background-color: #59c45a;
        transition: background-color 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
    }

    @media (min-width: 768px) {
        .awe-btn {
            padding: 10px 20px;
            font-size: 0.9em;
        }
    }

    .awe-btn:hover {
        background-color: #4a9f4c;
    }

    .awe-btn:active {
        background-color: #3f8b42;
    }

    .awe-btn-medium .fa-search {
        margin-left: 8px;
    }

    /* Price Display */
    .ferry-table td:nth-child(4),
    .ferry-table td:nth-child(5),
    .ferry-table td:nth-child(6) {
        white-space: nowrap;
    }

    /* Responsive Table Container */
    .table-container {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin-bottom: 15px;
        box-shadow: inset -5px 0 10px -5px rgba(0,0,0,0.1);
    }

    /* Loading Indicator for Mobile Scroll */
    .table-container::-webkit-scrollbar {
        height: 6px;
    }

    .table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .table-container::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 3px;
    }

    /* Mobile Optimization */
    @media (max-width: 480px) {
        .ferry-table td,
        .ferry-table th {
            padding: 6px 4px;
            font-size: 0.8em;
        }

        .awe-btn {
            padding: 6px 10px;
            font-size: 0.8em;
        }
    }
</style>

<!-- Banner -->
<section class="sub-banner">
    <div class="bg-parallax bg-1"></div>
    <div class="logo-banner text-center">
        <a href="" title="">
            <img src="" alt="">
        </a>
    </div>
</section>
<!-- End Banner -->

<!-- Main Content -->
<div class="main">
    <div class="container">
        <div class="main-cn cruise-page bg-white clearfix">
            <div class="row">
                <!-- Ferry Details Section -->
                <div class="col-lg-12">
                    <section class="ferry-list">
                        <h2>Ferry Schedule and Rates</h2>

                        <!-- Ferry: Nautika -->
                        <div class="ferry-table">
                            <h3>Nautika</h3>
                            <div class="table-container">
                                <table>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Dep - Arr</th>
                                        <th>Luxury Class</th>
                                        <th>Royal Class</th>
                                        <th>Book Now</th>
                                    </tr>
                                    <?php
                                    $nautika_routes = [
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "07:30 - 09:00", "₹1750", "₹1950"],
                                        ["Swaraj Dweep (Havelock)", "Shaheed Dweep (Neil)", "09:30 - 10:15", "₹1600", "₹1800"],
                                        ["Shaheed Dweep (Neil)", "Port Blair", "10:45 - 12:00", "₹1650", "₹1850"],
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "12:45 - 14:00", "₹1750", "₹1950"],
                                        ["Swaraj Dweep (Havelock)", "Shaheed Dweep (Neil)", "15:15 - 16:00", "₹1600", "₹1800"],
                                        ["Shaheed Dweep (Neil)", "Port Blair", "16:15 - 18:00", "₹1650", "₹1850"]
                                    ];
                                    foreach ($nautika_routes as $route) {
                                        $message = urlencode("I'm interested in booking the Nautika ferry from {$route[0]} to {$route[1]} at {$route[2]}.");
                                        echo "<tr>
                                                <td>{$route[0]}</td>
                                                <td>{$route[1]}</td>
                                                <td>{$route[2]}</td>
                                                <td>{$route[3]}</td>
                                                <td>{$route[4]}</td>
                                                <td><a href='https://wa.me/918900943735?text={$message}' class='awe-btn awe-btn-medium awe-search'>Book Now</a></td>
                                              </tr>";
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>

                        <!-- Ferry: Green Ocean 1 -->
                        <div class="ferry-table">
                            <h3>Green Ocean 1</h3>
                            <div class="table-container">
                                <table>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Dep - Arr</th>
                                        <th>Economy Class</th>
                                        <th>Premium Class</th>
                                        <th>Royal Class</th>
                                        <th>Book Now</th>
                                    </tr>
                                    <?php
                                    $green_ocean_1_routes = [
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "06:30 - 08:45", "₹1200", "₹1550", "₹1750"],
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "13:15 - 15:30", "₹1200", "₹1550", "₹1750"],
                                        ["Swaraj Dweep (Havelock)", "Shaheed Dweep (Neil)", "09:15 - 10:30", "₹1200", "₹1550", "₹1750"],
                                        ["Shaheed Dweep (Neil)", "Port Blair", "11:00 - 12:45", "₹1200", "₹1550", "₹1750"]
                                    ];
                                    foreach ($green_ocean_1_routes as $route) {
                                        $message = urlencode("I'm interested in booking the Green Ocean 1 ferry from {$route[0]} to {$route[1]} at {$route[2]}.");
                                        echo "<tr>
                                                <td>{$route[0]}</td>
                                                <td>{$route[1]}</td>
                                                <td>{$route[2]}</td>
                                                <td>{$route[3]}</td>
                                                <td>{$route[4]}</td>
                                                <td>{$route[5]}</td>
                                                <td><a href='https://wa.me/918900943735?text={$message}' class='awe-btn awe-btn-medium awe-search'>Book Now</a></td>
                                              </tr>";
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>

                        <!-- Ferry: Green Ocean 2 -->
                        <div class="ferry-table">
                            <h3>Green Ocean 2</h3>
                            <div class="table-container">
                                <table>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Dep - Arr</th>
                                        <th>Premium Class</th>
                                        <th>Royal Class</th>
                                        <th>Book Now</th>
                                    </tr>
                                    <?php
                                    $green_ocean_2_routes = [
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "07:00 - 09:00", "₹1000", "₹1750"],
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "11:45 - 13:45", "₹1200", "₹1750"],
                                        ["Swaraj Dweep (Havelock)", "Shaheed Dweep (Neil)", "14:15 - 15:30", "₹1550", "₹1750"],
                                        ["Shaheed Dweep (Neil)", "Port Blair", "16:15 - 18:00", "₹1550", "₹1750"]
                                    ];
                                    foreach ($green_ocean_2_routes as $route) {
                                        $message = urlencode("I'm interested in booking the Green Ocean 2 ferry from {$route[0]} to {$route[1]} at {$route[2]}.");
                                        echo "<tr>
                                                <td>{$route[0]}</td>
                                                <td>{$route[1]}</td>
                                                <td>{$route[2]}</td>
                                                <td>{$route[3]}</td>
                                                <td>{$route[4]}</td>
                                                <td><a href='https://wa.me/918900943735?text={$message}' class='awe-btn awe-btn-medium awe-search'>Book Now</a></td>
                                              </tr>";
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>

                        <!-- Ferry: Makruzz -->
                        <div class="ferry-table">
                            <h3>Makruzz</h3>
                            <div class="table-container">
                                <table>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Dep - Arr</th>
                                        <th>Premium Class</th>
                                        <th>Deluxe Class</th>
                                        <th>Royal Class</th>
                                        <th>Book Now</th>
                                    </tr>
                                    <?php
                                    $makruzz_routes = [
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "06:00 - 07:30", "₹1000", "₹2300", "₹3150"],
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "08:00 - 09:30", "₹1775", "₹2300", "₹3150"],
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "08:30 - 10:00", "₹1775", "-", "-"],
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "11:30 - 13:00", "₹1775", "₹2300", "₹3150"],
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "14:00 - 15:30", "₹1775", "₹2300", "₹3150"],
                                        ["Swaraj Dweep (Havelock)", "Shaheed Dweep (Neil)", "10:00 - 11:00", "₹1650", "₹1925", "₹2625"],
                                        ["Swaraj Dweep (Havelock)", "Shaheed Dweep (Neil)", "10:30 - 11:30", "₹1650", "-", "-"],
                                        ["Swaraj Dweep (Havelock)", "Shaheed Dweep (Neil)", "14:00 - 15:00", "₹1650", "₹1925", "₹2625"],
                                        ["Shaheed Dweep (Neil)", "Port Blair", "11:20 - 12:30", "₹1675", "₹2050", "₹2950"],
                                        ["Shaheed Dweep (Neil)", "Port Blair", "12:00 - 13:15", "₹1675", "-", "-"],
                                        ["Shaheed Dweep (Neil)", "Port Blair", "16:00 - 17:10", "₹1675", "₹2050", "₹2950"]
                                    ];
                                    foreach ($makruzz_routes as $route) {
                                        $message = urlencode("I'm interested in booking the Makruzz ferry from {$route[0]} to {$route[1]} at {$route[2]}.");
                                        echo "<tr>
                                                <td>{$route[0]}</td>
                                                <td>{$route[1]}</td>
                                                <td>{$route[2]}</td>
                                                <td>{$route[3]}</td>
                                                <td>{$route[4]}</td>
                                                <td>{$route[5]}</td>
                                                <td><a href='https://wa.me/918900943735?text={$message}' class='awe-btn awe-btn-medium awe-search'>Book Now</a></td>
                                              </tr>";
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>

                        <!-- Ferry: ITT Majestic -->
                        <div class="ferry-table">
                            <h3>ITT Majestic</h3>
                            <div class="table-container">
                                <table>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Dep - Arr</th>
                                        <th>Silver Class</th>
                                        <th>Majesty Class</th>
                                        <th>Book Now</th>
                                    </tr>
                                    <?php
                                    $itt_majestic_routes = [
                                        ["Port Blair", "Swaraj Dweep (Havelock)", "08:30 - 10:00", "₹1650", "₹1850"],
                                        ["Swaraj Dweep (Havelock)", "Shaheed Dweep (Neil)", "10:30 - 11:30", "₹1450", "₹1650"],
                                        ["Shaheed Dweep (Neil)", "Port Blair", "11:45 - 13:05", "₹1550", "₹1750"]
                                    ];
                                    foreach ($itt_majestic_routes as $route) {
                                        $message = urlencode("I'm interested in booking the ITT Majestic ferry from {$route[0]} to {$route[1]} at {$route[2]}.");
                                        echo "<tr>
                                                <td>{$route[0]}</td>
                                                <td>{$route[1]}</td>
                                                <td>{$route[2]}</td>
                                                <td>{$route[3]}</td>
                                                <td>{$route[4]}</td>
                                                <td><a href='https://wa.me/918900943735?text={$message}' class='awe-btn awe-btn-medium awe-search'>Book Now</a></td>
                                              </tr>";
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>

                    </section>
                </div>
                <!-- End Ferry Details Section -->

            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>