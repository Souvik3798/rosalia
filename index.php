<?php include 'include/header.php'; ?>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





<!--Banner-->
<section style="position: relative; width: 100%; height: 100vh;">
  <img src="https://static.vecteezy.com/system/resources/previews/008/063/100/non_2x/rear-view-portrait-of-young-man-traveler-with-backpack-standing-on-a-mountain-with-arms-spread-open-travel-life-style-and-adventure-concept-free-photo.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">

  <!-- Black overlay -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.3);"></div>

  <div class="container" style="position: relative; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; align-items: center;">
    <div style="text-align: center; margin-top: 80px;">
      <a href="" title="" class="d-block d-md-none">
        <img src="images/logo.png" alt="" style="max-width: 200px;" />
      </a>
    </div>

    <!-- Banner Content -->
    <div style="text-align: center; margin-top: auto; margin-bottom: auto;">
      <!-- Welcome Quote -->
      <div style="color: white; max-width: 90%; margin: 0 auto; text-shadow: 1px 1px 2px rgba(0,0,0,0.3)">
        <h2 style="font-size: clamp(32px, 4vw, 64px); font-weight: bold; text-shadow: 1px 1px 2px rgba(0,0,0,0.3)">Welcome to Rosalia Travel</h2>
        <p style="font-size: clamp(20px, 2vw, 32px); font-weight: bold; text-shadow: 1px 1px 2px rgba(0,0,0,0.3)">
          Where every journey begins with a dream
        </p>
      </div>
      <!-- End Welcome Quote -->
    </div>
    <!-- End Banner Content -->
  </div>
</section>
<!--End Banner-->

<!-- Popular Sections -->
<section class="popular-sections">
  <div class="container">
    <!-- Top Cabs -->
    <div class="section-block">
      <div class="section-header">
        <span class="section-icon"><i class="fas fa-car"></i></span>
        <h2 class="section-title">Popular Cab Services</h2>
        <p class="section-subtitle">Choose from our wide range of comfortable vehicles</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://static.toyotabharat.com/images/showroom/innova-mmc/unmatched-unrivaled-banner1600x850.jpg" alt="Innova">
              <div class="item-tag">Most Popular</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-car-side"></i> Toyota Innova</h3>
              <div class="item-features">
                <span><i class="fas fa-users"></i> 7 Seater</span>
                <span><i class="fas fa-suitcase"></i> 4 Bags</span>
                <span><i class="fas fa-snowflake"></i> AC</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 3500/day</p>
              <a href="car-list.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://gaadiwaadi.com/wp-content/uploads/2024/01/maruti-swift-6-1068x656.jpg.webp" alt="Swift">
              <div class="item-tag">Budget Friendly</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-car-side"></i> Maruti Swift</h3>
              <div class="item-features">
                <span><i class="fas fa-users"></i> 4 Seater</span>
                <span><i class="fas fa-suitcase"></i> 2 Bags</span>
                <span><i class="fas fa-snowflake"></i> AC</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 2500/day</p>
              <a href="car-list.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://stimg.cardekho.com/images/carexteriorimages/930x620/Maruti/Ertiga-Tour/9617/1675861474531/front-left-side-47.jpg" alt="Ertiga">
              <div class="item-tag">Family Choice</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-car-side"></i> Maruti Ertiga</h3>
              <div class="item-features">
                <span><i class="fas fa-users"></i> 6 Seater</span>
                <span><i class="fas fa-suitcase"></i> 3 Bags</span>
                <span><i class="fas fa-snowflake"></i> AC</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 3000/day</p>
              <a href="car-list.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="height: 3px; background-color: #4CAF50; margin: 30px 0;"></div>


    <!-- Entry Tickets -->
    <div class="section-block">
      <div class="section-header">
        <span class="section-icon"><i class="fas fa-ticket-alt"></i></span>
        <h2 class="section-title">Popular Entry Tickets</h2>
        <p class="section-subtitle">Must-visit attractions in Andaman</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://www.andamanisland.in/storage/blogs/thumb/61b1b4cb48339141_light_jail.jpg" alt="Cellular Jail">
              <div class="item-tag">Historical</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-monument"></i> Cellular Jail Light & Sound Show</h3>
              <div class="item-features">
                <span><i class="far fa-clock"></i> 1 Hour Show</span>
                <span><i class="fas fa-language"></i> Multiple Languages</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 350/person</p>
              <a href="entry-tickets.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://i.ytimg.com/vi/U8_AExUk_6c/maxresdefault.jpg" alt="North Bay">
              <div class="item-tag">Adventure</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-water"></i> North Bay Coral Island</h3>
              <div class="item-features">
                <span><i class="fas fa-fish"></i> Snorkeling</span>
                <span><i class="fas fa-ship"></i> Glass Bottom Ride</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 950/person</p>
              <a href="entry-tickets.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://www.andamanislands.com/assets/site1/theme3/images/ross-island-in-andaman.jpg" alt="Ross Island">
              <div class="item-tag">Heritage</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-landmark"></i> Ross Island Entry</h3>
              <div class="item-features">
                <span><i class="fas fa-camera"></i> Photography</span>
                <span><i class="fas fa-walking"></i> Guided Tours</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 450/person</p>
              <a href="entry-tickets.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="height: 3px; background-color: #4CAF50; margin: 30px 0;"></div>

    <!-- Featured Hotels -->
    <div class="section-block">
      <div class="section-header">
        <span class="section-icon"><i class="fas fa-hotel"></i></span>
        <h2 class="section-title">Featured Hotels</h2>
        <p class="section-subtitle">Luxurious stays at prime locations</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://cdn-6151b331c1ac189188d8dcd4.closte.com/wp-content/uploads/2021/11/andaman-private-pool-villa-cs-03.jpg" alt="Symphony Palms">
              <div class="item-tag">Beachfront</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-umbrella-beach"></i> Symphony Palms Beach Resort</h3>
              <p class="location"><i class="fas fa-map-marker-alt"></i> Havelock Island</p>
              <div class="item-features">
                <span><i class="fas fa-wifi"></i> Free WiFi</span>
                <span><i class="fas fa-swimming-pool"></i> Pool</span>
                <span><i class="fas fa-utensils"></i> Restaurant</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 4500/night</p>
              <a href="home-hotel.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/62/74/c2/front-view.jpg?w=600&h=-1&s=1" alt="Blue Bird">
              <div class="item-tag">City Center</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-hotel"></i> Blue Bird Resort</h3>
              <p class="location"><i class="fas fa-map-marker-alt"></i> Port Blair</p>
              <div class="item-features">
                <span><i class="fas fa-wifi"></i> Free WiFi</span>
                <span><i class="fas fa-car"></i> Parking</span>
                <span><i class="fas fa-coffee"></i> Breakfast</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 3500/night</p>
              <a href="home-hotel.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/339662696.jpg?k=770324dbef28ec2717317c2fbb8b15e823f9c9045ee6e9c91f7c577c4a635a28&o=&hp=1" alt="Coral Reef">
              <div class="item-tag">Sea View</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-hotel"></i> Coral Reef Resort</h3>
              <p class="location"><i class="fas fa-map-marker-alt"></i> Neil Island</p>
              <div class="item-features">
                <span><i class="fas fa-wifi"></i> Free WiFi</span>
                <span><i class="fas fa-spa"></i> Spa</span>
                <span><i class="fas fa-cocktail"></i> Bar</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 4000/night</p>
              <a href="home-hotel.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="height: 3px; background-color: #4CAF50; margin: 30px 0;"></div>




    <!-- Popular Packages -->
    <div class="section-block">
      <div class="section-header">
        <span class="section-icon"><i class="fas fa-suitcase-rolling"></i></span>
        <h2 class="section-title">Popular Tour Packages</h2>
        <p class="section-subtitle">Curated experiences for unforgettable memories</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://images.unsplash.com/photo-1528719953625-3e95efad84da?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dG91ciUyMGd1aWRlfGVufDB8fDB8fHww" alt="8 Nights Package">
              <div class="item-tag">Best Seller</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-route"></i> 8 Nights 9 Days Andaman Adventure</h3>
              <p class="highlights"><i class="fas fa-map-marked-alt"></i> Port Blair • Havelock • Neil Island</p>
              <div class="item-features">
                <span><i class="fas fa-hotel"></i> 4★ Hotels</span>
                <span><i class="fas fa-utensils"></i> All Meals</span>
                <span><i class="fas fa-ferry"></i> Transfers</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 35,000/person</p>
              <a href="8 Nights 9 Days Andaman Adventure.php" class="btn-book">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://www.andamantourism.org/wp-content/uploads/2017/06/family-beach.jpg" alt="5 Nights Package">
              <div class="item-tag">Popular</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-route"></i> 5 Nights 6 Days Andaman Explorer</h3>
              <p class="highlights"><i class="fas fa-map-marked-alt"></i> Port Blair • Havelock</p>
              <div class="item-features">
                <span><i class="fas fa-hotel"></i> 3★ Hotels</span>
                <span><i class="fas fa-utensils"></i> Breakfast</span>
                <span><i class="fas fa-ferry"></i> Transfers</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 25,000/person</p>
              <a href="package.php" class="btn-book">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://media-cdn.tripadvisor.com/media/photo-s/22/29/13/b9/team-experience-andamans.jpg" alt="3 Nights Package">
              <div class="item-tag">Quick Trip</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-route"></i> 3 Nights 4 Days Port Blair Special</h3>
              <p class="highlights"><i class="fas fa-map-marked-alt"></i> Port Blair • Ross Island</p>
              <div class="item-features">
                <span><i class="fas fa-hotel"></i> 3★ Hotels</span>
                <span><i class="fas fa-utensils"></i> Breakfast</span>
                <span><i class="fas fa-car"></i> Transfers</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 15,000/person</p>
              <a href="package.php" class="btn-book">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="height: 3px; background-color: #4CAF50; margin: 30px 0;"></div>

    <!-- Ferry Services -->
    <div class="section-block">
      <div class="section-header">
        <span class="section-icon"><i class="fas fa-ship"></i></span>
        <h2 class="section-title">Ferry Services</h2>
        <p class="section-subtitle">Explore our comfortable ferry options between islands</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://cdn.experienceandamans.com/images/green-ocean-cruise-andaman.jpg" alt="Green Ocean">
              <div class="item-tag">Premium</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-ship"></i> Green Ocean</h3>
              <p class="highlights"><i class="fas fa-map-marked-alt"></i> Port Blair ↔ Havelock</p>
              <div class="item-features">
                <span><i class="fas fa-couch"></i> Business Class</span>
                <span><i class="fas fa-clock"></i> 2 Hours</span>
                <span><i class="fas fa-snowflake"></i> AC</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 1,250/person</p>
              <a href="cruise-list.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://www.go2andaman.com/wp-content/uploads/2022/02/N-Lite-1.png" alt="Nautika Lite">
              <div class="item-tag">Fast Ferry</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-ship"></i> Nautika Lite</h3>
              <p class="highlights"><i class="fas fa-map-marked-alt"></i> Port Blair ↔ Neil Island</p>
              <div class="item-features">
                <span><i class="fas fa-couch"></i> Economy</span>
                <span><i class="fas fa-clock"></i> 1.5 Hours</span>
                <span><i class="fas fa-snowflake"></i> AC</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 1,050/person</p>
              <a href="cruise-list.php" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item-card">
            <div class="item-image">
              <img src="https://makruzz.com/assets/images/about-fleet-thumb-img2.jpg" alt="Makruzz">
              <div class="item-tag">Most Popular</div>
            </div>
            <div class="item-content">
              <h3><i class="fas fa-ship"></i> Makruzz</h3>
              <p class="highlights"><i class="fas fa-map-marked-alt"></i> Havelock ↔ Neil Island</p>
              <div class="item-features">
                <span><i class="fas fa-couch"></i> Luxury</span>
                <span><i class="fas fa-clock"></i> 1 Hour</span>
                <span><i class="fas fa-snowflake"></i> AC</span>
              </div>
              <p class="price"><i class="fas fa-rupee-sign"></i> 1,450/person</p>
              <a href="cruise-list.phpp" class="btn-book">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  html {
    /* Set base font size to 16px which is the standard */
    font-size: 16px;
  }

  body {
    /* Use relative units for better accessibility and responsiveness */
    font-size: 1rem;
    line-height: 1.5;
  }

  h1 {
    font-size: 2.5rem;
    /* 40px */
  }

  h2 {
    font-size: 2rem;
    /* 32px */
  }

  h3 {
    font-size: 1.75rem;
    /* 28px */
  }

  h4 {
    font-size: 1.5rem;
    /* 24px */
  }

  h5 {
    font-size: 1.25rem;
    /* 20px */
  }

  h6 {
    font-size: 1rem;
    /* 16px */
  }

  p,
  span,
  a,
  li {
    font-size: 1rem;
    /* 16px */
  }

  .small-text {
    font-size: 0.875rem;
    /* 14px */
  }

  /* Responsive font sizes */
  @media screen and (max-width: 768px) {
    html {
      font-size: 14px;
      /* Slightly smaller base size for mobile */
    }
  }

  @media screen and (min-width: 1200px) {
    html {
      font-size: 18px;
      /* Slightly larger base size for large screens */
    }
  }


  .popular-sections {
    padding: 80px 0;
    background: #f8f9fa;
  }

  .section-block {
    margin-bottom: 80px;
  }

  .section-header {
    text-align: center;
    margin-bottom: 50px;
  }

  .section-icon {
    font-size: 2.5rem;
    color: #59c45a;
    margin-bottom: 15px;
    display: block;
  }

  .section-title {
    color: #1b4b1c;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
  }

  .section-subtitle {
    color: #666;
    font-size: 1.1rem;
  }

  .item-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    transition: all 0.3s ease;
  }

  .item-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
  }

  .item-image {
    position: relative;
    overflow: hidden;
  }

  .item-image img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .item-card:hover .item-image img {
    transform: scale(1.1);
  }

  .item-tag {
    position: absolute;
    top: 20px;
    right: -35px;
    background: #59c45a;
    color: white;
    padding: 5px 40px;
    transform: rotate(45deg);
    font-size: 0.8rem;
    font-weight: bold;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  .item-content {
    padding: 25px;
  }

  .item-content h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: #1b4b1c;
    font-weight: 600;
  }

  .item-content h3 i {
    margin-right: 8px;
    color: #59c45a;
  }

  .location,
  .highlights {
    color: #666;
    margin-bottom: 15px;
    font-size: 0.95rem;
  }

  .location i,
  .highlights i {
    color: #59c45a;
    margin-right: 5px;
  }

  .item-features {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
    flex-wrap: wrap;
  }

  .item-features span {
    font-size: 0.9rem;
    color: #666;
  }

  .item-features span i {
    color: #59c45a;
    margin-right: 5px;
  }

  .price {
    color: #59c45a;
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .btn-book {
    display: inline-block;
    background: #59c45a;
    color: white;
    padding: 12px 25px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-book i {
    margin-left: 5px;
    transition: transform 0.3s ease;
  }

  .btn-book:hover {
    background: #3d9c3e;
    color: white;
    text-decoration: none;
  }

  .btn-book:hover i {
    transform: translateX(5px);
  }

  @media (max-width: 768px) {
    .section-title {
      font-size: 2rem;
    }

    .item-card {
      margin-bottom: 20px;
    }

    .item-features {
      flex-direction: column;
      gap: 8px;
    }
  }
</style>
<!-- Slick Slider CDN -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

<?php include 'include/footer.php'; ?>