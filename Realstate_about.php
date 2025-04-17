<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get the best home loan offers with low interest rates. Apply online today!">
    <meta name="keywords" content="home loan, mortgage, low interest loan, housing finance">
    <meta name="author" content="NexaHome">

    <title>Realstate - NexaHome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Your existing styles here */
        body {
            background-color: rgba(211, 203, 244, 0.54);
            color: #333;
            font-family: 'Arial', sans-serif;
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
            background-color: rgba(43, 20, 150, 0.85) !important;
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
        .search-bar {
            flex-grow: 1;
            max-width: 400px;
        }

        .search-bar input {
            width: 100%;
            padding: 8px 15px;
            border-radius: 20px;
            border: 1px solid #ddd;
            outline: none;
            transition: all 0.3s ease-in-out;
        }

        .search-bar input:focus {
            border-color: #FFD700;
            box-shadow: 0px 0px 5px rgba(255, 215, 0, 0.8);
        }

        /* Mobile Search Bar Inside Navbar */
        .mobile-search {
            padding: 10px;
        }

        /* Login Button */
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

        .accordion-item {
            background-color: rgba(43,20,150,255) !important;
            color: white !important;
            border: 1px solid rgba(211, 203, 244, 0.54);
        }

        .accordion-button {
            background-color: rgba(43,20,150,255) !important;
            color: white !important;
            border: none;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(43,20,150,255) !important;
            color: white !important;
        }

        .accordion-body {
            background-color: rgba(43,20,150,255) !important;
            color: white !important;
        }

        /* Added spacing between heading and accordion */
        h2.text-center {
            margin-bottom: 30px; /* Adjust this value if needed */
        } 

        /* content section */
        .about-section {
            max-width: 1100px;
            margin: 60px auto;
            padding: 60px 30px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            text-align: center;
            animation: fadeInUp 1s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .about-section h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: rgba(43,20,150,255);
            margin-bottom: 25px;
        }

        .about-section p {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .feature-box {
            margin-top: 40px;
        }

        .feature-box h4 {
            color: #FFC107;
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .feature-box p {
            color: #555;
            font-size: 1rem;
            padding: 0 10px;
        }

        .loan-box {
            background: linear-gradient(to right, #e0f7fa, #ffffff);
            padding: 30px;
            border-radius: 15px;
            margin-top: 50px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .loan-box h5 {
            color: rgba(43,20,150,255);
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .loan-box p {
            color: #444;
            font-size: 1rem;
        }

        .footer-note {
            margin-top: 40px;
        }

        .footer-note h6 {
            font-size: 1.2rem;
            font-weight: 600;
            color: rgba(43,20,150,255);
        }

        .footer-note p {
            font-size: 1rem;
            color: #555;
        }

        @media (max-width: 768px) {
            .about-section {
                padding: 40px 20px;
            }

            .about-section h1 {
                font-size: 2rem;
            }

            .feature-box .col-md-4 {
                margin-bottom: 30px;
            }
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
                <span class="flicker-text fs-6 text-center text-md-start">+91 9839782220 - For New Home Loans</span>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Clickable Image -->
        <a class="navbar-brand">
            <img src="logo.png" alt="NexaHome Logo" class="me-2" onclick="openFullscreen(this)">
            NexaHomes
        </a>

        <!-- Fullscreen Image Modal -->
        <div id="fullscreenContainer" onclick="closeFullscreen()">
            <img id="fullscreenImage" src="" alt="Fullscreen View">
        </div>
        
        <!-- Desktop Search Bar -->
        <div class="search-bar mx-3 d-none d-lg-block">
            <input type="text" class="form-control" placeholder="Search for loans, rates, EMI...">
        </div>

        <!-- Toggler for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="RealState.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="Realstate_about.php">About</a></li>
                <!-- Projects Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown">Projects</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#landplot">Plots/Land</a></li>
                        <li><a class="dropdown-item" href="#apparmtnet">Appartment</a></li>
                        <li><a class="dropdown-item" href="#villa">Villa</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="RealState.php#faq">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="Realstate_about.php#contact">Contact</a></li>
            </ul>
            
            <!-- apply Button (Opens in a New Tab) -->
            <div class="login-container ms-lg-3">
                <a href="RealState_Enquiry.php" class="btn btn-login" target="_blank" rel="noopener noreferrer">Apply Online</a>
            </div>
        </div>
    </div>
</nav>

<!-- content section -->
<section class="about-section">
    <h1>Welcome to Nexa Home — Where Your Perfect Home Finds You</h1>

    <p>
      Looking to buy, sell, or rent? At <strong>Nexa Home</strong>, we’re redefining real estate to make your journey smooth, smart, and stress-free.
      With thousands of verified listings across India and a trusted network of real estate professionals, finding the right home has never been easier.
    </p>

    <div class="row justify-content-center feature-box">
      <div class="col-md-4">
        <h4>Personalized Recommendations</h4>
        <p>Our smart system learns from your searches, saved homes, and preferences to suggest properties that match your style — so you never miss a dream home.</p>
      </div>
      <div class="col-md-4">
        <h4>All-in-One Platform</h4>
        <p>From cozy city apartments to luxurious villas, explore homes tailored to your needs, in locations you love.</p>
      </div>
      <div class="col-md-4">
        <h4>Trusted & Transparent</h4>
        <p>Verified listings, expert agents, and honest guidance every step of the way.</p>
      </div>
    </div>

    <div class="loan-box mt-5">
        <h5><i class="bi bi-house-heart-fill me-2 text-primary"></i>Need a Home Loan? We’ve Got You Covered.</h5>
        <p>
          Through our dedicated loan platform 
          <strong><a href="LoanHome.php" target="_blank" rel="noopener noreferrer">NexaHomeLoans</a></strong>, 
          we offer quick approvals, competitive rates, and custom solutions to help you finance your future with confidence.
        </p>
        <a href="RealState_Enquiry.php" class="btn btn-primary mt-3 px-4 py-2" target="_blank" rel="noopener noreferrer">Apply Now</a>
      </div>
      

    <div class="footer-note">
      <h6>Simple. Smart. Reliable.</h6>
      <p>That’s the Nexa promise. Discover the better way to find home — with <strong>Nexa Home</strong>.</p>
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
                    <h5 class="mt-3"><strong>Nexa Homes Fintech Pvt. Ltd.</strong></h5>
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

    // Close the navbar when clicking outside
    document.addEventListener("click", function (event) {
        let navbar = document.querySelector(".navbar-collapse");
        let toggler = document.querySelector(".navbar-toggler");

        // Check if the navbar is open and the click is outside of it and the toggler
        if (navbar.classList.contains("show") && !navbar.contains(event.target) && !toggler.contains(event.target)) {
            let bsCollapse = new bootstrap.Collapse(navbar, {
                toggle: false
            });
            bsCollapse.hide();
        }
    });

    // Toggle navbar on toggler click
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        let navbar = document.querySelector(".navbar-collapse");
        let bsCollapse = new bootstrap.Collapse(navbar);
        bsCollapse.toggle();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>