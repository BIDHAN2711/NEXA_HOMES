<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Handpicked Residential Projects across India">
    <meta name="keywords" content="Real Estate, Apartments, Housing, Residential Projects">
    <meta name="author" content="NexaHome">

    <title>Realstate - NexaHome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* Your existing styles here */
        body {
            background-color: rgba(211, 203, 244, 0.54);
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth; /* Add smooth scrolling */
        }
        /* Contact info Styling */
        .contact-info {
            background-color: transparent; /* Light gray background */
            font-size: 18px;
            font-weight: bold;
        }
        .phone-icon {
            font-size: 20px;
            color: red;
        }
        .flicker-text {
            color: red;
            animation: flicker 1.5s infinite alternate;
        }
        @keyframes flicker {
            0% { color: red; }
            50% { color: rgb(208, 7, 195); }
            100% { color: rgba(43,20,150,255); }
        }
        /* Navbar Styling */
        .navbar {
            background-color: rgba(43,20,150,255) !important;
            padding: 10px 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        /* Navbar Brand */
        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }
        .navbar-brand img {
            height: 60px;
            margin-right: 10px;
            border-radius: 40px;
        }
        /* Navbar Links */
        .nav-link {
            color: white !important;
            font-size: 1.1rem;
            margin-right: 10px;
            transition: color 0.3s ease-in-out;
        }
        .nav-link:hover {
            color: #FFD700 !important;
        }
        /* Dropdown Menu */
        .dropdown-menu {
            background-color: rgba(43, 20, 150, 0.95);
            display: none;
            position: absolute;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-item {
            color: white !important;
        }
        .dropdown-item:hover {
            background-color: #FFD700 !important;
            color: #2B1496 !important;
        }
        /* Search Bar */
        .search-container {
            background: #fff;
            border-radius: 8px;
            padding: 12px;
            display: flex;
            align-items: center;
            max-width: 900px;
            margin: auto;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15);
        }
        .form-select, .form-control {
            border: none;
            outline: none;
            box-shadow: none;
        }
        .search-icons {
            display: flex;
            align-items: center;
        }
        .search-icons img {
            width: 40px;
            height: 40px;
            margin: 0 5px;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }
        .search-icons img:hover {
            transform: scale(1.1);
        }
        .btn-primary {
            background-color: #FFD700;
            border-color: #FFD700;
            color: #2B1496;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.7s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #FFC107;
            border-color: #FFC107;
        }
        /* apply Button */
        .btn-login {
            background-color: #FFD700;
            border-color: #FFD700;
            color: #2B1496;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 8px;
            text-align: center;
            display: block;
            width: 100%;
            max-width: 150px;
        }
        .btn-login:hover {
            background-color: #FFC107;
            border-color: #FFC107;
        }
        /* Align Login Button */
        .login-container {
            display: flex;
            align-items: center;
        }
        /* Fullscreen Image Styling */
        #fullscreenContainer {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        #fullscreenContainer img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
        }
        @media (max-width: 991px) {
            .search-bar {
                display: none; /* Hide desktop search bar */
            }
            .login-container {
                justify-content: center;
                margin-top: 10px;
            }
        }
        /* Image Scroller */
        .carousel-strip img {
            height: 380px;
            object-fit: cover;
            width: 100%;
        }
        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 1px solid #000;
            margin: 0 6px;
            opacity: 0.8;
            transition: opacity 0.3s, transform 0.3s;
        }
        .carousel-indicators .active {
            background-color: #000;
            transform: scale(1.2);
            opacity: 1;
        }
        .carousel-indicators {
            bottom: 10px;
        }
        /* Search Section */
        .header-container {
            position: relative;
            width: 100%;
            height: 300px;
            background: url('plot1.jpg') center/cover no-repeat;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }
        h2, h5 ,h3 {
            font-weight: bold;
            color: rgba(43,20,150,255);
        }
        .editable {
            border: none;
            background: none;
            font-weight: bold;
            color: rgba(43,20,150,255);
            width: auto;
            display: inline;
        }
        .loan-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        .loan-button {
            padding: 8px 12px;
            background: rgba(43,20,150,255);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .loan-button:hover {
            background: white;
            color: black;
        }
        /* Styling for both buttons */
        .styled-button {
            padding: 8px 12px;
            background: rgba(43,20,150,255);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .styled-button:hover {
            background: white;
            color: black;
        }
        /* FAQ */
        .accordion-item {
            background-color: rgba(43,20,150,255) !important;
            color: white !important;
            border: 1px solid rgba(211, 203, 244, 0.54);
        }
        .accordion-button {
            background-color: rgba(43,20,150,255) !important;
            color: white !important;
            border: 1px solid rgba(211, 203, 244, 0.54);
            padding: 15px;
            font-weight: bold;
        }
        .accordion-button:hover {
            background-color: rgba(60, 30, 180, 255) !important;
            color: white !important;
        }
        .accordion-button:not(.collapsed) {
            background-color: rgba(43,20,150,255) !important;
            color: white !important;
            box-shadow: none;
        }
        .accordion-body {
            background-color: rgba(43,20,150,255) !important;
            color: white !important;
        }
        h2.text-center {
            margin-bottom: 30px;
        }
        /* Flats Card section */
        .featured {
            position: absolute;
            top: 10px;
            left: 10px;
            background: purple;
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 5px;
        }
        .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .project-card:hover {
            transform: scale(1.05);
        }
        /* Contact section  */
        .contact-section {
            background-color: rgba(43,20,150,255);
            color: white;
            padding: 25px 25px;
        }
        .contact-section h5 {
            color: white;
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 20px;
        }
        .contact-section a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .contact-section a:hover {
            text-decoration: underline;
        }
        .contact-section p {
            margin-bottom: 8px;
            font-size: 16px;
        }
        .support-info {
            display: flex;
            align-items: center;
        }
        .support-icon {
            margin-right: 10px;
            font-size: 20px;
        }
        .company-address {
            font-size: 18px;
            font-weight: bold;
            margin-top: 12px;
            border-left: 4px solid white;
            padding-left: 12px;
        }
        .map-icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            vertical-align: middle;
        }
        .services-section {
            display: flex;
            flex-direction: column;
            text-align: left; /* Changed from center to left */
            padding-left: 15px;
        }
        .services-list {
            list-style: none;
            padding: 0;
            font-size: 16px;
            margin-top: 15px;
        }
        .services-list li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

<!-- Bootstrap Container for Contact Info -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-auto">
            <div class="contact-info d-flex flex-column flex-md-row align-items-center justify-content-center p-2">
                <i class="fas fa-phone-alt phone-icon me-2 fs-6"></i>
                <span class="flicker-text fs-6 text-center text-md-start">+91 9839782220 - For Plots Loans</span>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Carousel -->
<div id="carouselExample" class="carousel slide carousel-fade carousel-strip" data-bs-ride="carousel" data-bs-interval="5000">
    <!-- Circular Dot Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  
    <!-- Carousel Items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="RealsState_Frontpic1.jpg" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="RealsState_Frontpic2.jpg" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="RealsState_Frontpic3.jpg" class="d-block w-100" alt="Slide 3">
      </div>
    </div>
  
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
  
<!-- Navigation Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 sticky-top" style="z-index: 1030;">
    <div class="container">
        <!-- Logo and Brand -->
        <a class="navbar-brand d-flex align-items-center text-white text-wrap" href="#">
            <img src="logo.png" alt="NexaHome Logo" class="me-2" style="height: 60px;" onclick="openFullscreen(this)">
            <span class="fw-bold fs-5">NexaHomes Real Estate</span>
        </a>

        <!-- Fullscreen Image Modal -->
        <div id="fullscreenContainer" onclick="closeFullscreen()">
            <img id="fullscreenImage" src="" alt="Fullscreen View">
        </div>

        <!-- Move Toggler to Right -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="background-color: #FFC107;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav" id="menu">
                <li class="nav-item"><a class="nav-link active" href="RealState.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="Realstate_about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Plot/Lands <span class="new-launch-dot">&#8226;</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Apartment <span class="new-launch-dot">&#8226;</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Villa <span class="new-launch-dot">&#8226;</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <!-- apply Button (Opens in a New Tab) -->
            <div class="login-container ms-lg-3">
                <a href="RealState_Enquiry.php" class="btn btn-login" target="_blank" rel="noopener noreferrer">Apply Online</a>
            </div>
        </div>
    </div>
</nav>

<!-- Search Section -->
<div class="container my-4">
    <div class="search-container p-4">
        <div class="row w-100 gx-3">
            <!-- Dropdown -->
            <div class="col-md-3 col-12 mb-3 mb-md-0">
                <label class="form-label fw-semibold">Check Residential</label>
                <select class="form-select">
                    <option selected>All Residential</option>
                    <option>Apartment</option>
                    <option>Villa</option>
                    <option>Plot</option>
                </select>
            </div>

            <!-- Search Input + Icons -->
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <label class="form-label fw-semibold">Search</label>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control me-2" id="searchInput" placeholder='"lands in Kanpur"'>
                    <div class="search-icons">
                        <img src="Realstate_icon1.png" alt="Location" />
                        <img src="Realstate_icon2.png" alt="Microphone" id="micBtn" />
                    </div>
                </div>
            </div>

            <!-- Search Button -->
            <div class="col-md-3 col-12 d-flex flex-column justify-content-end">
                <label class="form-label fw-semibold invisible">Search</label>
                <button class="btn btn-primary w-100" id="searchBtn">Search</button>
            </div>
        </div>
    </div>
</div>

<!-- Flats Card Section -->
<div class="container my-5">
    <h2 class="fw-bold">Handpicked Residential Projects</h2>
    <p class="text-muted">Featured Residential projects across India</p>
    <div class="row flex-nowrap overflow-auto">
        <div class="col-md-4">
            <div class="card project-card">
                <span class="featured">Featured</span>
                <img src="RealState_flatpic1.jpeg" class="card-img-top" alt="Bricks Marvella">
                <div class="card-body">
                    <h5 class="card-title">Bricks Marvella</h5>
                    <p class="card-text">2,3,4 BHK Apartment, Tellapur, Hyderabad</p>
                    <p><strong>₹99.71 Lacs - 2.58 Cr</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card project-card">
                <span class="featured">Featured</span>
                <img src="RealState_flatpic2.jpeg" class="card-img-top" alt="Lumbini Elysee">
                <div class="card-body">
                    <h5 class="card-title">Lumbini Elysee</h5>
                    <p class="card-text">3,4 BHK Apartment, Financial District, Hyderabad</p>
                    <p><strong>₹2.26 - 4.54 Cr</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card project-card">
                <span class="featured">Featured</span>
                <img src="RealState_flatpic3.jpeg" class="card-img-top" alt="Rishi Coral">
                <div class="card-body">
                    <h5 class="card-title">Rishi Coral</h5>
                    <p class="card-text">4,5 BHK Independent Houses, Hoshangabad</p>
                    <p><strong>₹1.8 Cr</strong></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card project-card">
                <span class="featured">Featured</span>
                <img src="RealState_flatpic4.jpg" class="card-img-top" alt="Lumbini Elysee">
                <div class="card-body">
                    <h5 class="card-title">Lumbini Elysee</h5>
                    <p class="card-text">3,4 BHK Apartment, Financial District, Hyderabad</p>
                    <p><strong>₹2.26 - 4.54 Cr</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="faq" class="container my-5">
    <h2 class="text-center mb-4">Frequently Asked Questions for Plot Loans</h2>
    <div class="accordion" id="faqAccordion">
        <!-- FAQ Items will be dynamically inserted here -->
    </div>
</section>

<div class="container-fluid contact-section" id="contact">
    <div class="row">
        <!-- Contact Us Section -->
        <div class="container-fluid contact-section">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <a href="tel:+919839782220">📞 Service Request / Queries</a>
                    <a href="tel:+919839782220">📢 Helpline Number</a>
                    <a href="https://www.google.com/maps/search/?api=1&query=21-W2,+Damodar+Nagar,+Opp.+Sarojani+Medical+Centre" target="_blank">
                        <img src="https://static.vecteezy.com/system/resources/previews/012/871/377/original/google-maps-icon-google-product-illustration-free-png.png" alt="Google Maps" class="map-icon"> Locate Us
                    </a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=nexahomes.kanpur@gmail.com" target="_blank">📩 Chat via Gmail</a>
                    <h5 class="mt-3"><strong>Nexa Homes Realstate Pvt. Ltd.</strong></h5>
                    <p class="company-address">📍 21-W2, Damodar Nagar, Opp. Sarojani Medical Centre, Kanpur</p>
                </div>
                <!-- Services Section (Aligned Left) -->
                <div class="col-md-4 services-section">
                    <h5>🌟 Projects</h5>
                    <ul class="services-list">
                        <li>🏞️ Plots / Lands</li>
                        <li>🏢 Apartments</li>
                        <li>🏡 Villas</li>
                    </ul>
                </div>
                <!-- Support Section -->
                <div class="col-md-4">
                    <h5>Support</h5>
                    <p>📞 Give A Missed Call</p>
                    <p class="support-info">
                        <i class="bi bi-telephone-fill support-icon"></i> <strong>+91-9839782220</strong>
                    </p>
                    <p>
                        📩 <a href="sms:9839782220?body=NexaHome" style="text-decoration: none; color: inherit;">
                            Send SMS
                        </a>
                    </p>
                    <p class="support-info">
                        <i class="bi bi-chat-text-fill support-icon"></i> 
                        <a href="sms:9839782220?body=NexaHome" style="text-decoration: none; color: inherit;">
                            NexaHomes To 9839782220
                        </a>
                    </p>
                    <p>WhatsApp</p>
                    <p class="support-info">
                        <i class="bi bi-whatsapp support-icon text-success"></i> 
                        <a href="https://wa.me/919839782220" class="text-success" target="_blank">Chat With Us</a>
                    </p>
                </div>
            </div>
            <!-- Footer -->
             <!-- Scroll to Top Button (Left Bottom Corner) -->
<button id="scrollToTopBtn" 
        class="btn btn-primary position-fixed bottom-0 start-0 m-4 d-none rounded-circle shadow"
        style="z-index: 1050; width: 45px; height: 45px;">
  ↑
</button>

<!-- Script -->
<script>
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      scrollToTopBtn.classList.remove("d-none");
    } else {
      scrollToTopBtn.classList.add("d-none");
    }
  });

  scrollToTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
</script>

<footer class="bg-gray-100 py-8" style="color: white;">
    <div class="container mx-auto px-6 text-center">
      <div class="flex justify-center space-x-6 text-gray-600 text-sm mb-4">
      </div>
      <div class="text-gray-400 text-xs">
        © 2025 NexaHomes Fintech Realstate and Marketing Private Limited. All rights reserved.
      </div>
    </div>
  </footer>
        </div>

        <script>
            // Open and close the logo image
            function openFullscreen(image) {
                document.getElementById("fullscreenImage").src = image.src; // Set image source
                document.getElementById("fullscreenContainer").style.display = "flex"; // Show modal
            }

            function closeFullscreen() {
                document.getElementById("fullscreenContainer").style.display = "none"; // Hide modal
            }

            // JavaScript to Handle Active State
            document.addEventListener("DOMContentLoaded", function () {
                const menuItems = document.querySelectorAll("#menu .nav-link");

                menuItems.forEach(item => {
                    item.addEventListener("click", function () {
                        menuItems.forEach(nav => nav.classList.remove("active")); // Remove active from all
                        this.classList.add("active"); // Add active to clicked item
                    });
                });

                // Navbar toggle functionality
                const navbar = document.querySelector('.navbar-collapse');
                const toggler = document.querySelector('.navbar-toggler');

                toggler.addEventListener('click', () => {
                    navbar.classList.toggle('show'); // Toggle the navbar
                });

                // Close navbar on scroll
                window.addEventListener('scroll', function() {
                    if (navbar.classList.contains('show')) { // Check if navbar is open
                        let bsCollapse = new bootstrap.Collapse(navbar, {
                            toggle: false
                        });
                        bsCollapse.hide(); // Close the navbar
                    }
                });
            });

            // Voice recognition
            const micBtn = document.getElementById("micBtn");
            const searchInput = document.getElementById("searchInput");
            const searchBtn = document.getElementById("searchBtn");

            const SpeechRecognition =
                window.SpeechRecognition || window.webkitSpeechRecognition;

            if (SpeechRecognition) {
                const recognition = new SpeechRecognition();
                recognition.continuous = false;
                recognition.lang = "en-US";
                recognition.interimResults = false;

                micBtn.addEventListener("click", () => {
                    recognition.start();
                });

                recognition.onresult = function (event) {
                    const transcript = event.results[0][0].transcript;
                    searchInput.value = transcript;
                    searchBtn.click(); // Auto-trigger search
                };

                recognition.onerror = function (event) {
                    console.error("Voice recognition error:", event.error);
                };
            } else {
                alert("Your browser does not support voice recognition.");
            }

            const faqs = [
                { question: "Can I avail a plot loan without approved construction plans?", answer: "Yes, many banks allow you to take a plot loan for purchasing land even if you don't have approved construction plans at the time of purchase. You can obtain the necessary approvals after acquiring the land." },
                { question: "Are there tax benefits available on plot loans?", answer: "No, there are generally no income tax benefits for plot loans. Tax benefits are typically available only for home loans." },
                { question: "What is the maximum time allowed to start construction on a purchased plot?", answer: "Some lenders require that construction on the purchased plot be completed within a specified period, such as 2 years from the date of loan disbursement." },
                { question: "What factors determine the loan amount I can receive for a plot purchase?", answer: "Besides the value of the plot, banks may consider factors such as your age, employment status, assets and liabilities, occupation, number of dependents, spouse's income, and savings history." },
                { question: "What documents are required to apply for a plot loan?", answer: "Duly filled application form, Proof of age, Income proof, Proof of employment or business, Address proof, Plot-related documents, Approved layouts or drawings of the plot." },
                { question: "Do I need to provide security to acquire a plot loan?", answer: "Yes, the plot itself typically serves as the primary security for the loan. However, additional security or collateral may be required depending on the lender's policies and the loan amount." },
                { question: "Can I get a loan for purchasing a commercial plot?", answer: "Some banks offer separate products for the purchase and/or construction on commercial or industrial plots, especially for self-employed customers. It's advisable to check with your lender for specific offerings." },
                { question: "Is it mandatory to have a co-applicant for a loan against land?", answer: "A co-applicant is generally not required. However, if there are multiple owners of the land, it is mandatory to include them all as co-applicants." },
                { question: "What is the difference between a home loan and a construction loan?", answer: "A home loan is used for already constructed properties, whereas a construction loan is designed for individuals who intend to construct their house on already owned land." },
                { question: "How is the value of the land calculated for the loan?", answer: "The market value of the land is estimated based on the amount it can fetch if sold under prevailing market conditions." }
            ];

            const faqContainer = document.getElementById("faqAccordion");
            
            faqs.forEach((faq, index) => {
                const faqItem = `
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq${index + 1}" aria-expanded="false" aria-controls="faq${index + 1}">
                                ${index + 1}. ${faq.question}
                            </button>
                        </h2>
                        <div id="faq${index + 1}" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                ${faq.answer}
                            </div>
                        </div>
                    </div>
                `;
                faqContainer.innerHTML += faqItem;
            });
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>