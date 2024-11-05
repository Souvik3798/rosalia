<?php include 'include/header.php'; ?>

<!-- Bootstrap CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Google Fonts (optional) -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Main Content -->
<main class="hotel-detail-main">
    <!-- Hotel Header Section -->
    <section class="hotel-header position-relative" style="background: linear-gradient(rgba(89, 196, 90, 0.9), rgba(89, 196, 90, 0.8)), url('https://tse2.mm.bing.net/th?id=OIP.6aZCFgxPytkh3LoTY1nfUAHaE8&pid=Api') center/cover; color: white; padding: 120px 0 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="hotel-title display-4 mb-3">Symphony Palms Beach Resort & Spa</h1>
                    <div class="hotel-rating mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="ms-2">(4.5/5 from 500 reviews)</span>
                    </div>
                    <p class="hotel-location fs-5">
                        <i class="fas fa-map-marker-alt me-2"></i> No. 2, Govind Nagar, Havelock Island, Andaman Islands
                        <a href="#map" class="text-white ms-3 text-decoration-none"><i class="fas fa-directions me-1"></i>Get Directions</a>
                    </p>
                </div>
                <div class="col-md-4 text-end">
                    <div class="price-tag glass-morphism p-4">
                        <span class="fs-5 d-block mb-2">Starting from</span>
                        <h2 class="display-5 fw-bold mb-3">₹7,500<small class="fs-6 text-white">/night</small></h2>
                        <button class="btn btn-light btn-lg w-100" onclick="window.open('https://wa.me/8900943735?text=I want to check availability at Symphony Palms Beach Resort', '_blank')"><i class="fas fa-calendar-alt me-2"></i>Check Availability</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Navigation -->
    <nav class="hotel-nav sticky-top bg-white shadow-sm">
        <div class="container">
            <ul class="nav nav-pills justify-content-center py-3">
                <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#amenities" class="nav-link">Amenities</a></li>
                <li class="nav-item"><a href="#rooms" class="nav-link">Rooms</a></li>
                <li class="nav-item"><a href="#reviews" class="nav-link">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hotel Gallery Section -->
    <section id="gallery" class="hotel-gallery py-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-8">
                    <div class="position-relative gallery-main">
                        <img src="https://www.wanderershub.com/wp-content/uploads/2021/12/Untitled-5-4.jpg" alt="Main Image" class="img-fluid rounded main-image" style="width: 100%; height: 500px; object-fit: cover;">
                        <button class="btn btn-light position-absolute bottom-0 end-0 m-3" data-bs-toggle="modal" data-bs-target="#galleryModal">
                            <i class="fas fa-th me-2"></i>View All Photos
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row g-3">
                        <div class="col-6 col-md-12">
                            <div class="gallery-item position-relative">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.UtPB-BJI__JxGSwfSsIN6AHaFj&pid=Api" alt="Gallery Image 1" class="img-fluid rounded" style="width: 100%; height: 240px; object-fit: cover;">
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="col-6 col-md-12">
                            <div class="gallery-item position-relative">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.DltQ7G2EKToSLVts-0AvKgHaE8&pid=Api" alt="Gallery Image 2" class="img-fluid rounded" style="width: 100%; height: 240px; object-fit: cover;">
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hotel Description Section -->
    <section id="about" class="hotel-description py-8" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="description-card bg-white p-4 rounded shadow-sm">
                        <h2 class="section-title h3 fw-bold" style="color: #59c45a;">About the Hotel</h2>
                        <p class="mt-3 lead">Symphony Palms Beach Resort & Spa offers a luxurious beachfront experience on Havelock Island. This eco-friendly resort provides a mix of relaxation and adventure, perfect for beach lovers and adventure seekers alike.</p>

                        <div id="amenities" class="amenities mt-5">
                            <h3 class="h4 mb-4">Key Amenities</h3>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="amenity-card p-3 border rounded text-center">
                                        <i class="fas fa-wifi fa-2x mb-3" style="color: #59c45a;"></i>
                                        <h4 class="h6 mb-0">Free High-Speed WiFi</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="amenity-card p-3 border rounded text-center">
                                        <i class="fas fa-swimming-pool fa-2x mb-3" style="color: #59c45a;"></i>
                                        <h4 class="h6 mb-0">Swimming Pool</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="amenity-card p-3 border rounded text-center">
                                        <i class="fas fa-spa fa-2x mb-3" style="color: #59c45a;"></i>
                                        <h4 class="h6 mb-0">Spa & Wellness Center</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="amenity-card p-3 border rounded text-center">
                                        <i class="fas fa-utensils fa-2x mb-3" style="color: #59c45a;"></i>
                                        <h4 class="h6 mb-0">In-House Restaurant</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="amenity-card p-3 border rounded text-center">
                                        <i class="fas fa-parking fa-2x mb-3" style="color: #59c45a;"></i>
                                        <h4 class="h6 mb-0">Free Parking</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="amenity-card p-3 border rounded text-center">
                                        <i class="fas fa-concierge-bell fa-2x mb-3" style="color: #59c45a;"></i>
                                        <h4 class="h6 mb-0">24/7 Concierge</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="quick-facts bg-white p-4 rounded shadow-sm">
                        <h3 class="h4 fw-bold mb-4" style="color: #59c45a;">Quick Facts</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3">
                                <i class="fas fa-clock me-3" style="color: #59c45a;"></i>
                                <div>
                                    <strong>Check-in:</strong><br>
                                    2:00 PM
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="fas fa-sign-out-alt me-3" style="color: #59c45a;"></i>
                                <div>
                                    <strong>Check-out:</strong><br>
                                    11:00 AM
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fas fa-paw me-3" style="color: #59c45a;"></i>
                                <div>
                                    <strong>Pet Policy:</strong><br>
                                    Pets allowed upon request
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Types Section -->
    <section id="rooms" class="room-types py-5">
        <div class="container">
            <h2 class="section-title text-center h2 fw-bold mb-5" style="color: #59c45a;">Available Room Types</h2>
            <div class="row g-4">
                <!-- Lagoon Suite -->
                <div class="col-md-4">
                    <div class="room-card bg-white rounded shadow-sm h-100">
                        <div class="position-relative">
                            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/109696906.jpg?k=c7c32cb1ec20a68840e0f751a22743127bafc234844182d6daeb496175665208&o=&hp=1" alt="Lagoon Suite" class="img-fluid rounded-top" style="width: 100%; height: 250px; object-fit: cover;">
                            <span class="badge bg-success position-absolute top-0 end-0 m-3">Popular</span>
                        </div>
                        <div class="room-info p-4">
                            <h3 class="h4 mb-3">Lagoon Suite</h3>
                            <p class="text-muted mb-4">Spacious suite with a garden view.</p>
                            <ul class="room-features list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-bed me-2"></i> King Size Bed</li>
                                <li class="mb-2"><i class="fas fa-water me-2"></i> Garden View</li>
                            </ul>
                            <div class="price-book d-flex align-items-center justify-content-between">
                                <div class="price">
                                    <span class="fs-3 fw-bold">₹9,500</span>
                                </div>
                                <a href="https://wa.me/918900943735?text=I'm%20interested%20in%20booking%20a%20Lagoon%20Suite%20at%20Symphony%20Palms%20Beach%20Resort.%20Please%20provide%20more%20details."
                                    target="_blank" class="btn btn-success book-btn px-4">
                                    <i class="fas fa-calendar-check me-2"></i>Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Havelock Cottage -->
                <div class="col-md-4">
                    <div class="room-card bg-white rounded shadow-sm h-100">
                        <div class="position-relative">
                            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/109695196.jpg?k=d03e1a7299ae3a2d8dfef3a1acd32df0cf1644dbc22c6c50bb5a6d73a3704989&o=&hp=1" alt="Havelock Cottage" class="img-fluid rounded-top" style="width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <div class="room-info p-4">
                            <h3 class="h4 mb-3">Havelock Cottage</h3>
                            <p class="text-muted mb-4">Comfortable cottage with a jungle view.</p>
                            <ul class="room-features list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-bed me-2"></i> Queen Size Bed</li>
                                <li class="mb-2"><i class="fas fa-tree me-2"></i> Jungle View</li>
                            </ul>
                            <div class="price-book d-flex align-items-center justify-content-between">
                                <div class="price">
                                    <span class="fs-3 fw-bold">₹8,500</span>
                                </div>
                                <a href="https://wa.me/918900943735?text=I'm%20interested%20in%20booking%20a%20Havelock%20Cottage%20at%20Symphony%20Palms%20Beach%20Resort.%20Please%20provide%20more%20details."
                                    target="_blank" class="btn btn-success book-btn px-4">
                                    <i class="fas fa-calendar-check me-2"></i>Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Havelock Casa Room -->
                <div class="col-md-4">
                    <div class="room-card bg-white rounded shadow-sm h-100">
                        <div class="position-relative">
                            <img src="https://pix10.agoda.net/hotelImages/443/443315/443315_16042614390041813839.jpg?ca=13&ce=1&s=414x232&ar=16x9" alt="Havelock Casa Room" class="img-fluid rounded-top" style="width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <div class="room-info p-4">
                            <h3 class="h4 mb-3">Havelock Casa Room</h3>
                            <p class="text-muted mb-4">Elegant room with a comfortable ambiance.</p>
                            <ul class="room-features list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-bed me-2"></i> Queen Size Bed</li>
                                <li class="mb-2"><i class="fas fa-water me-2"></i> Garden View</li>
                            </ul>
                            <div class="price-book d-flex align-items-center justify-content-between">
                                <div class="price">
                                    <span class="fs-3 fw-bold">₹7,500</span>
                                </div>
                                <a href="https://wa.me/918900943735?text=I'm%20interested%20in%20booking%20a%20Havelock%20Casa%20Room%20at%20Symphony%20Palms%20Beach%20Resort.%20Please%20provide%20more%20details."
                                    target="_blank" class="btn btn-success book-btn px-4">
                                    <i class="fas fa-calendar-check me-2"></i>Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Custom CSS -->
<style>
    /* Set base font size */
    html {
        font-size: 16px;
    }

    body {
        font-size: 1rem;
        line-height: 1.5;
    }

    .hotel-title {
        font-size: 3rem;
        font-weight: 700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .hotel-rating i {
        color: #ffd700;
        font-size: 1.25rem;
    }

    .glass-morphism {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 1.1rem;
    }

    .hotel-nav .nav-link {
        color: #59c45a;
        padding: 0.5rem 1.5rem;
        margin: 0 0.5rem;
        border-radius: 25px;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    .hotel-nav .nav-link:hover,
    .hotel-nav .nav-link.active {
        background-color: #59c45a;
        color: white;
    }

    .gallery-item {
        overflow: hidden;
        cursor: pointer;
    }

    .gallery-item img {
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.2);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .overlay {
        opacity: 1;
    }

    .amenity-card {
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    .amenity-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .price-book .book-btn {
        background-color: #59c45a;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    .book-btn:hover {
        background-color: #4ab54b;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(89, 196, 90, 0.3);
    }

    .room-card {
        transition: all 0.3s ease;
        border: 1px solid #eee;
        font-size: 1.1rem;
    }

    .room-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .hotel-nav .nav-link {
            padding: 0.5rem 1rem;
            margin: 0 0.25rem;
            font-size: 1rem;
        }

        .hotel-title {
            font-size: 2.5rem;
        }
    }
</style>

<!-- Bootstrap Bundle with Popper.js (optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<?php include 'include/footer.php'; ?>