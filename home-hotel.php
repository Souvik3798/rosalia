<?php include 'include/header.php'; ?>



<!-- Banner with Black Overlay -->
<section class="banner">
    <div class="bg-parallax" style="background-image: url('https://www.hospitalitycourses.co.za/gallery/modern%20hotel,green%20operations%20&%20sustainability.webp');">
        <div class="content">
            <h1 style="color: white; font-weight: bold;">Explore Top Hotels in the Andaman Islands</h1>
            <p style="color: white;">Your guide to the best hotels with beaches and pools in Port Blair, Havelock, and Neil Island.</p>
        </div>
    </div>
</section>

<!-- Styles for Layout -->
<style>
    .bg-parallax {
        position: relative;
        background-size: cover;
        background-position: 50% 50%;
        height: 60vh;
        margin-top: -50px;
        padding-top: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .bg-parallax::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .bg-parallax .content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #fff;
    }

    .hotel-section {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    .location-title {
        font-size: 2em;
        color: #59c45a;
        margin-top: 30px;
        text-align: center;
    }

    .hotel-group {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;
        background: #f5f5f5;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        border-bottom: 3px solid #59c45a;
    }

    .hotel-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 100%;
        max-width: 250px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .hotel-card:hover {
        transform: translateY(-5px);
    }

    .hotel-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .hotel-card h4 {
        font-size: 1.2em;
        color: #333;
        margin: 15px 0 5px;
    }

    .hotel-card p {
        font-size: 0.9em;
        color: #666;
        padding: 0 10px 15px;
    }

    .highlight {
        color: #59c45a;
        font-weight: bold;
    }

    .book-now-btn {
        display: inline-block;
        background-color: #59c45a;
        color: white;
        padding: 8px 15px;
        text-decoration: none;
        border-radius: 5px;
        margin: 10px 0 15px;
        transition: all 0.3s ease;
    }

    .book-now-btn:hover {
        background-color: #4aa84b;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(89, 196, 90, 0.3);
        text-decoration: none;
        color: white;
    }

    .location-title {
        text-align: center;
        color: #333;
        font-size: 2em;
        margin: 30px 0;
        padding: 10px;
        position: relative;
        font-weight: 600;
    }

    .location-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background-color: #59c45a;
    }
</style>

<div class="hotel-section">

    <!-- Port Blair Section -->
    <div class="location-section">
        <h2 class="location-title">Top Hotels with Beaches in Port Blair</h2>
        <div class="hotel-group">
            <div class="hotel-card">
                <a href="fortunebay.php">
                    <img src="https://pix10.agoda.net/hotelImages/50051/-1/0f9a0a2e3859e484c86b851c44018f38.jpg?ca=7&ce=1&s=414x232&ar=16x9" alt="Fortune Resort Bay Island">
                    <h4>Fortune Resort Bay Island</h4>
                    <p>Beautiful beachfront views with premium amenities.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Fortune Resort Bay Island" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Sinclairs.php">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/f7/d1/ac/sinclairs-bay-view-port.jpg?w=700&h=-1&s=1" alt="Sinclairs Bayview Port Blair">
                    <h4>Sinclairs Bayview Port Blair</h4>
                    <p>Located on a cliff, offering panoramic beach views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Sinclairs Bayview Port Blair" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="peerless.php">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/8b/64/c2/facade-of-peerless-resort.jpg?w=700&h=-1&s=1" alt="Peerless Resort Port Blair">
                    <h4>Peerless Resort Port Blair</h4>
                    <p>Direct access to a serene private beach.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Peerless Resort Port Blair" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="seashell.php">
                    <img src="https://pix10.agoda.net/hotelImages/443506/-1/a9cea3fa9562772626cf6143598996dc.jpg?ca=8&ce=1&s=414x232&ar=16x9" alt="SeaShell, Port Blair">
                    <h4>SeaShell, Port Blair</h4>
                    <p>Rooftop lounge with stunning sea views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel SeaShell, Port Blair" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="sentinel.php">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/384492681.jpg?k=564a0e2bcfb516bb741cb7b31ca09ff23dec591d49ad043a695aea9165cd1c63&o=&hp=1" alt="Hotel Sentinel">
                    <h4>Hotel Sentinel</h4>
                    <p>Colonial-style hotel near beautiful beaches.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Hotel Sentinel" class="book-now-btn" target="_blank">Book Now</a>
            </div>
        </div>
    </div>

    <div class="location-section">
        <h2 class="location-title">Top Hotels with Pools in Port Blair</h2>
        <div class="hotel-group">
            <div class="hotel-card">
                <a href="atvilla.php">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/45/0c/69/the-andaman-islands-are.jpg?w=700&h=-1&s=1" alt="AT Villa">
                    <h4>AT Villa</h4>
                    <p>Relax in the outdoor pool with scenic views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel AT Villa" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="mansaresidency.php">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/db/a8/4e/hotel-mansha-regency.jpg?w=700&h=-1&s=1" alt="Mansha Regency">
                    <h4>Mansha Regency</h4>
                    <p>Offers a large pool for relaxing and swimming.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Mansha Regency" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="itc.php">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/312197777.jpg?k=5561c2b797741832e34e8dd080cce29ed9a03224bdb0339ea2b775015f73af4a&o=&hp=1" alt="Welcomhotel by ITC Hotels">
                    <h4>Welcome hotel by ITC Hotels</h4>
                    <p>Luxury hotel with an infinity pool and ocean views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Welcomhotel by ITC Hotels" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="peerless.php">
                    <img src="https://content.jdmagicbox.com/comp/port_blair/m5/9999p3192.3192.100416115721.u1m5/catalogue/peerless-sarovar-portico-port-blair-4-star-hotels-i5wwr.jpg" alt="Peerless Resort Port Blair">
                    <h4>Peerless Resort Port Blair</h4>
                    <p>Enjoy a poolside experience with beach views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Peerless Resort Port Blair" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="shompen.php">
                    <img src="https://res.cloudinary.com/simplotel/image/upload/w_5000,h_3333/x_0,y_260,w_5000,h_2813,c_crop,q_80,fl_progressive/w_900,h_506,f_auto,c_fit/hotel-shompen/Hotel_Shompen_(1)" alt="Hotel Shompen">
                    <h4>Hotel Shompen</h4>
                    <p>Comfortable hotel with a well-maintained pool.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Hotel Shompen" class="book-now-btn" target="_blank">Book Now</a>
            </div>
        </div>
    </div>

    <!-- Havelock Island Section -->
    <div class="location-section">
        <h2 class="location-title">Top Hotels with Beaches in Havelock Island</h2>
        <div class="hotel-group">
            <div class="hotel-card">
                <a href="taj.php">
                    <img src="https://images.trvl-media.com/lodging/21000000/20220000/20212200/20212105/484113b4.jpg?impolicy=resizecrop&rw=575&rh=575&ra=fill" alt="Taj Exotica Resort & Spa">
                    <h4>Taj Exotica Resort & Spa</h4>
                    <p>Luxury resort on Radhanagar Beach with breathtaking views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Taj Exotica Resort & Spa" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="silversand.php">
                    <img src="https://tse4.mm.bing.net/th?id=OIP.lmZh7ZgvHYp_SMYbVlY2rAHaFj&w=355&h=355&c=7" alt="SilverSand Beach Resort">
                    <h4>SilverSand Beach Resort</h4>
                    <p>Direct access to Vijay Nagar Beach.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel SilverSand Beach Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="coralreefresort.php">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.mMkBWN7oFbTGgmTpE1H10AHaEK&w=266&h=266&c=7" alt="Coral Reef Resort">
                    <h4>Coral Reef Resort</h4>
                    <p>Offers a private beach and scenic views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Coral Reef Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="barefoot.php">
                    <img src=" https://tse1.mm.bing.net/th?id=OIP.ALISpJz9AHHvBQjSnpyEZwHaFS&w=338&h=338&c=7" alt="Barefoot at Havelock">
                    <h4>Barefoot at Havelock</h4>
                    <p>Eco-friendly resort on Radhanagar Beach.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Barefoot at Havelock" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="symphonypalms.php">
                    <img src=" https://tse1.mm.bing.net/th?id=OIP.SK4gWJmFRk-3x0VmEyS1NwHaE8&w=316&h=316&c=7" alt="Symphony Palms Beach Resort">
                    <h4>Symphony Palms Beach Resort</h4>
                    <p>Beautiful beachfront with island ambiance.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Symphony Palms Beach Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
        </div>
    </div>

    <div class="location-section">
        <h2 class="location-title">Top Hotels with Pools in Havelock Island</h2>
        <div class="hotel-group">
            <div class="hotel-card">
                <a href="seashellhavelock.php">
                    <img src="https://pix10.agoda.net/hotelImages/444301/-1/3108b98aa7aea54fa34b59609900396c.jpg?ca=8&ce=1&s=414x232&ar=16x9" alt="SeaShell Havelock">
                    <h4>SeaShell Havelock</h4>
                    <p>Luxurious pool area with a relaxing ambiance.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel SeaShell Havelock" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="islandbeachresort.php">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/f5/44/c2/swimming-pool-by-the.jpg?w=700&h=-1&s=1" alt="Havelock Island Beach Resort">
                    <h4>Havelock Island Beach Resort</h4>
                    <p>Beachfront resort with an inviting pool.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Havelock Island Beach Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Munjoh Ocean Resort.php">
                    <img src="https://munjoh.com/wp-content/uploads/2022/10/Munjoh-ocean-resort-Royal-Chalet-image.jpg" alt="Munjoh Ocean Resort">
                    <h4>Munjoh Ocean Resort</h4>
                    <p>Private pool with tropical surroundings.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Munjoh Ocean Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Wild Orchid Resort.php">
                    <img src="https://content.jdmagicbox.com/comp/port-blair/g3/9999p3192.3192.100902102746.w3g3/catalogue/the-wild-orchid-resort-havelock-port-blair-hotels-3o9nk2n.jpg" alt="The Wild Orchid Resort">
                    <h4>The Wild Orchid Resort</h4>
                    <p>A serene pool area with eco-friendly features.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel The Wild Orchid Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="blue bird resort.php">
                    <img src="https://www.go2andaman.com/wp-content/uploads/2021/02/go2andaman_havelock_5542.jpg" alt="Blue Bird Resort">
                    <h4>Blue Bird Resort</h4>
                    <p>Spacious pool area perfect for families.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Blue Bird Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
        </div>
    </div>


    <!-- Neil Island Section -->
    <div class="location-section">
        <h2 class="location-title">Top Hotels with Beaches in Neil Island</h2>
        <div class="hotel-group">
            <div class="hotel-card">
                <a href="Coconhuts Beach Resort.php">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/104721782.jpg?k=c91cd6d80481ad5b99b1c97120ae902ecb17ef593f7b0da2c88b174441976685&o=&hp=1" alt="Coconhuts Beach Resort">
                    <h4>Coconhuts Beach Resort</h4>
                    <p>Enjoy a relaxing pool area with a beach backdrop.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Coconhuts Beach Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Summer Sands Beach Resort.php">
                    <img src="https://summersands.in/wp-content/uploads/2021/10/38517877_240993610088492_2547044421187141632_n.jpg" alt="Summer Sands Beach Resort">
                    <h4>Summer Sands Beach Resort</h4>
                    <p>Private beach access with luxurious amenities.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Summer Sands Beach Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Tango Beach Resort.php">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/75757951.jpg?k=ada6a9ceb8c5d555a1f730b352ccf2caa3acd041e5ae346ae17cd303186285bb&o=&hp=1" alt="Tango Beach Resort">
                    <h4>Tango Beach Resort</h4>
                    <p>Located on Laxmanpur Beach, ideal for relaxation.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Tango Beach Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Pearl Park Beach Resort.php">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/294066975.jpg?k=a0904dea08e25d50aa7722d1d5481fa90ebadd5111ad97f9733949ca2a8c31e7&o=&hp=1" alt="Pearl Park Beach Resort">
                    <h4>Pearl Park Beach Resort</h4>
                    <p>Beachfront rooms with stunning ocean views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Pearl Park Beach Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="TSG RESORT.php">
                    <img src="https://www.tsgresorts.in/assests/images/blue/gallery/blue-5-lg.jpg" alt="TSG Resorts">
                    <h4>TSG Resorts</h4>
                    <p>Budget luxury Boutique Hotels and Beach</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel TSG Resorts" class="book-now-btn" target="_blank">Book Now</a>
            </div>
        </div>
    </div>

    <div class="location-section">
        <h2 class="location-title">Top Hotels with Pools in Neil Island</h2>
        <div class="hotel-group">
            <div class="hotel-card">
                <a href="silversandniel.php">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/384489661.jpg?k=8af07d9be22e1340bb29c0e89d54573c41c884281d4516fe8fda1744aed87caa&o=&hp=1" alt="Silver Sand Neil Resort">
                    <h4>Silver Sand Neil Resort</h4>
                    <p>Luxurious pool with ocean views and serene ambiance.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Silver Sand Neil Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Holiday Inn Beach Resort.php">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/0f/71/c3/e6/holiday-inn-beach-resort.jpg" alt="Holiday Inn Beach Resort">
                    <h4>Holiday Inn Beach Resort</h4>
                    <p>Offers a poolside bar with tropical garden views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Holiday Inn Beach Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>

            <div class="hotel-card">
                <a href="Sea Shell Samssara.php">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/65/69/09/sea-shell-samssara.jpg?w=700&h=-1&s=1" alt="Sea Shell Samssara">
                    <h4>Sea Shell Samssara</h4>
                    <p>Beachfront property with stunning coastal views.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Sea Shell Samssara" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Hotel Amulya.php">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/cc/b0/89/aquays-hotels-resorts.jpg?w=1200&h=-1&s=1" alt="Hotel Amulya">
                    <h4>Hotel Amulya</h4>
                    <p>Small, intimate pool for a refreshing experience.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Hotel Amulya" class="book-now-btn" target="_blank">Book Now</a>
            </div>
            <div class="hotel-card">
                <a href="Blue Lagoon Resort.php">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/285908876.jpg?k=845e7ddb9b02a3fc5227f1e58e2f861150b2334db29c8473155f903cee7c7db4&o=&hp=1" alt="Blue Lagoon Resort">
                    <h4>Blue Lagoon Resort</h4>
                    <p>Infinity pool overlooking lush landscapes and gardens.</p>
                </a>
                <a href="https://wa.me/8900943735?text=I want to book hotel Blue Lagoon Resort" class="book-now-btn" target="_blank">Book Now</a>
            </div>
        </div>
    </div>
</div>



<?php include 'include/footer.php'; ?>