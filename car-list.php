<?php include 'include/header.php'; ?>



<!--Banner-->
<style>
    .bg-taxi-banner {
        background-image: url('https://eu-assets.simpleview-europe.com/conwy2019/imageresizer/?image=%2Fdmsimgs%2FTaxi_1172279786.jpg&action=ProductDetailPro');
        height: 500px;
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
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner-title {
        font-size: 42px;
        color: #fff;
        font-weight: 700;
        text-align: center;
    }
    @media (max-width: 768px) {
        .bg-taxi-banner {
            margin-top: -50px;
            width: 100%;
        }
    }
</style>

<section class="sub-banner">
    <div class="bg-taxi-banner">
        <div class="banner-overlay">
            <h1 class="banner-title">Cab Booking</h1>
        </div>
    </div>
</section>
<!--End Banner-->

<!-- Main -->
<div class="main">
    <div class="container">
        <div class="main-cn element-page bg-white clearfix">
            <!--Breadcrumb-->
            <section class="breakcrumb-sc">
                <ul class="breadcrumb arrow">
                    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li>Cab Booking</li>
                </ul>
            </section>
            <!--End Breadcrumb-->

            <section class="cab-list">
                <div class="top-list-car clearfix">
                    <h2 class="section-title">Available Cabs</h2>
                    <p class="text-muted">Total includes taxes and fees</p>
                </div>

                <!-- Styling for the table -->
                <style>
                    .cab-list .table {
                        width: 100%;
                        margin-bottom: 20px;
                        border-collapse: collapse;
                    }

                    .cab-list .table th,
                    .cab-list .table td {
                        padding: 15px;
                        text-align: center;
                    }

                    .cab-list .table thead th {
                        background-color: #f7f7f7;
                        font-weight: bold;
                        border-bottom: 2px solid #ddd;
                    }

                    .cab-list .table tbody tr:nth-child(even) {
                        background-color: #f9f9f9;
                    }

                    .cab-list .section-heading {
                        background-color: #e9ecef;
                        font-weight: bold;
                        color: #333;
                    }

                    .cab-list .awe-btn {
                        background-color: #28a745;
                        color: #fff;
                        padding: 8px 20px;
                        text-transform: uppercase;
                        font-weight: bold;
                        border-radius: 5px;
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        text-decoration: none;
                    }

                    .cab-list .awe-btn i {
                        margin-left: 8px;
                        font-size: 14px;
                    }

                    .cab-list .awe-btn:hover {
                        background-color: #218838;
                        color: #fff;
                    }
                </style>

                <div class="responsive-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Place</th>
                                <th>AC Cab (₹)</th>
                                <th>Non-AC Cab (₹)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Port Blair Section -->
                            <tr class="section-heading">
                                <td colspan="4">Port Blair</td>
                            </tr>
                            <tr>
                                <td>Airport pick up & Drop (city)</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/9933285594?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Light & Sound Show</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Carbyn's Cove Beach</td>
                                <td>500</td>
                                <td>400</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Ross Island</td>
                                <td>500</td>
                                <td>400</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>North Bay Island</td>
                                <td>500</td>
                                <td>400</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Wandoor</td>
                                <td>1200</td>
                                <td>1200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jolly Buoy</td>
                                <td>1500</td>
                                <td>1500</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Chidiya Tapu Beach</td>
                                <td>1200</td>
                                <td>1200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Chatham Island & Saw Mill</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Samudrika Marine Museum</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Anthropological Museum</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Cellular Jail</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Fisheries Museum</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Shopping</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Baratang Island</td>
                                <td>4000</td>
                                <td>4000</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Diglipur Island</td>
                                <td>18000</td>
                                <td>14000</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jetty Drop & Pick Up</td>
                                <td>250</td>
                                <td>200</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Mount Harriet</td>
                                <td>2000</td>
                                <td>1500</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>

                            <!-- Havelock Island Section -->
                            <tr class="section-heading">
                                <td colspan="4">Havelock Island (Swaraj Dweep)</td>
                            </tr>
                            <tr>
                                <td>Havelock Jetty Pick Up</td>
                                <td>300</td>
                                <td>250</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Radha Nagar Beach</td>
                                <td>1200</td>
                                <td>1000</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Elephanta Beach</td>
                                <td>600</td>
                                <td>600</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Kalapather Beach</td>
                                <td>1000</td>
                                <td>800</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Vijay Nagar Beach</td>
                                <td>600</td>
                                <td>500</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Combo (2 Days) - Kalapather, Radhanagar Beach, Return Jetty Drop</td>
                                <td colspan="2">2500</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>

                            <!-- Neil Island Section -->
                            <tr class="section-heading">
                                <td colspan="4">Neil Island (Shaheed Dweep)</td>
                            </tr>
                            <tr>
                                <td>Neil Jetty Pickup & Drop</td>
                                <td>450</td>
                                <td>350</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Bharatpur Beach</td>
                                <td>450</td>
                                <td>350</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Laxmanpur Beach</td>
                                <td>450</td>
                                <td>350</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Natural Bridge</td>
                                <td>450</td>
                                <td>350</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Sitapur Beach</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td>Combo (2 Days) - Bharatpur Beach, Laxmanpur Beach, Natural Bridge, Jetty Drop</td>
                                <td colspan="2">1800</td>
                                <td><a href="https://wa.me/8900943735?text=Hello, I am interested in booking a cab." class="awe-btn awe-btn-small" target="_blank">Book Now <i class="fa fa-arrow-right"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>