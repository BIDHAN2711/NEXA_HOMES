<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NexaHome - Your trusted home loan and mortgage assistant.">
    <meta name="keywords" content="home loan, mortgage, NexaHome, EMI calculator, loan eligibility">
    <meta name="author" content="NexaHome">
    
    <title>NexaHome Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
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

        /* Contact us */
        .contact-section {
            background-color: rgba(43,20,150,255);
            color: white;
            padding: 50px 40px;
        }
        .contact-section h5 {
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

        .container {
            margin-top: 20px;
        }
        .card-img-top {
            height: 500px;
            object-fit: cover;
        }

        h1 { font-size: 2.5rem; font-weight: bold;color: rgba(43,20,150,255); }

        body { font-family: Arial, sans-serif; }
        .hero-section { background: #f4d41f; padding: 50px 20px; text-align: center; }
        .hero-section h1,h2 { font-size: 2.5rem; font-weight: bold;color: rgba(43,20,150,255); }
        .service-card { transition: transform 0.3s ease-in-out; }
        .service-card:hover { transform: scale(2); }
        .apply-btn { background-color: #372b9a; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block; }
        .apply-btn:hover { background-color: whitesmoke;color: black; }
        #pad
        {
            padding: 30px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Clickable Image -->
    <a class="navbar-brand">
        <img src="logo.png" alt="NexaHome Logo"  class="me-2" onclick="openFullscreen(this)">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

                    <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mobile-search d-lg-none">
                <input type="text" class="form-control" placeholder="Search for loans, rates, EMI...">
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="LoanHome.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="LoanHome_aboutus.php">About</a></li>
                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="LoanHome_homeLoan.php">Home Loan</a></li>
                        <li><a class="dropdown-item" href="#personal loan ">Personal Loan</a></li>
                        <li><a class="dropdown-item" href="LoanHome_Business.php">Business Loan</a></li>
                        <li><a class="dropdown-item" href="LoanHome_Carloan.php">Car Loan (New & Old)</a></li>
                        <li><a class="dropdown-item" href="LoanHome_SolarSystem.php">Solar System</a></li>
                        <li><a class="dropdown-item" href="#commercial-vehicle">Commercial Vehicle</a></li>
                        <li><a class="dropdown-item" href="#mercenary-loan">All Type of Mercenary Loan</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="LoanHome.php#calculator">Calculator</a></li>
                <li class="nav-item"><a class="nav-link" href="LoanHome_blog.php#contact">Contact</a></li>
            </ul>
            
            <!-- Apply Button (Properly aligned) -->
            <div class="login-container ms-lg-3">
                <a href="LoanHome_Enquiry.php" class="btn btn-login">Apply</a>
            </div>
        </div>
    </div>
</nav>
    



    
    <section class="hero-section">
        <div class="container">
            <h1>Get Easy Financing & Secure Your Future</h1>
            <p><strong>Find the perfect loan or insurance plan tailored to your needs.</strong></p>
        </div>
    </section>

        <!-- Pictures Section -->

    <div class="container">
        <h1 class="text-center">Financial Services</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="LoanHome_Homeloanblogpic.webp" class="card-img-top" alt="Home Loan">
                    <div class="card-body">
                        <h5 class="card-title" style="color: rgba(43,20,150,255);">Home Loan</h5>
                        <p class="card-text">Get easy home loans with low interest rates and flexible repayment options.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="LoanHome_Car loanblogpic.webp" class="card-img-top" alt="Car Loan">
                    <div class="card-body">
                        <h5 class="card-title" style="color: rgba(43,20,150,255);">Car Loan</h5>
                        <p class="card-text">Finance your dream car with our affordable car loan plans.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="LoanHome_Personal loanblogpic.webp" class="card-img-top" alt="Personal Loan">
                    <div class="card-body">
                        <h5 class="card-title" style="color: rgba(43,20,150,255);">Personal Loan</h5>
                        <p class="card-text">Avail personal loans for all your financial needs with quick approval.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="LoanHome_SolarLoanblogpic.jpg" class="card-img-top" alt="Solar Loan">
                    <div class="card-body">
                        <h5 class="card-title" style="color: rgba(43,20,150,255);">Solar Loan</h5>
                        <p class="card-text">Power your home with the sun—finance it with ease! ☀️💰.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="LoanHome_Mercenary Loanblogpic.webp" class="card-img-top" alt="Health Insurance">
                    <div class="card-body">
                        <h5 class="card-title" style="color: rgba(43,20,150,255);">Mercenary Loan</h5>
                        <p class="card-text">Fast funds, no questions—power your dreams with a mercenary loan! 💰⚡</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="LoanHome_BusinessLoan_blogpic.webp" class="card-img-top" alt="Life Insurance">
                    <div class="card-body">
                        <h5 class="card-title" style="color: rgba(43,20,150,255);">Business Loan</h5>
                        <p class="card-text">Fuel your business growth—get the funds you need, when you need them! 🚀💼</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Written section -->

    <div class="container mt-5" id="pad">
        <div class="row">
            <div class="col-md-6">
                <h2>Home Loan – Get Your Dream Home</h2>
                <p>✔ Low-interest rates starting at X%<br>✔ Flexible tenure up to 30 years<br>✔ Loan amount from ₹5 Lakhs to ₹5 Crores<br>✔ Quick approvals & minimal paperwork<br>✔ Tax benefits under Section 80C & 24(b)</p>
                <a href="LoanHome_Enquiry.php" class="apply-btn" target="_blank">Apply Now</a>
            </div>
            <div class="col-md-6">
                <h2>Personal Loan – Quick Funds</h2>
                <p>✔ Loan up to ₹50 Lakhs<br>✔ Flexible repayment (12 to 60 months)<br>✔ Quick disbursal within 24-48 hours<br>✔ No collateral required<br>✔ Low-interest rates with easy EMIs</p>
                <a href="LoanHome_Enquiry.php" class="apply-btn" target="_blank">Apply Now</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Business Loan – Fuel Growth</h2>
                <p>✔ Loans up to ₹2 Crores<br>✔ Collateral-free options<br>✔ Fast approvals with minimal paperwork<br>✔ Flexible EMIs & tenure up to 7 years<br>✔ Special loans for women entrepreneurs & MSMEs</p>
                <a href="LoanHome_Enquiry.php" class="apply-btn" target="_blank">Apply Now</a>
            </div>
            <div class="col-md-6">
                <h2>Car Loan – Own Your Dream Car</h2>
                <p>✔ Up to 100% financing<br>✔ Attractive interest rates<br>✔ Tenure up to 7 years<br>✔ Quick processing & minimal documentation</p>
                <a href="LoanHome_Enquiry.php" class="apply-btn" target="_blank">Apply Now</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Commercial Vehicle Loan</h2>
                <p>✔ Loan amount up to ₹1 Crore<br>✔ Quick approval & minimal paperwork<br>✔ Flexible tenure & affordable rates<br>✔ Financing for new & used vehicles</p>
                <a href="LoanHome_Enquiry.php" class="apply-btn" target="_blank">Apply Now</a>
            </div>
            <div class="col-md-6">
                <h2>Solar System Loan</h2>
                <p>✔ 100% financing for solar panels<br>✔ Low-interest rates & long tenure<br>✔ Government subsidies available<br>✔ Reduce electricity costs & go green</p>
                <a href="LoanHome_Enquiry.php" class="apply-btn" target="_blank">Apply Now</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Mercenary Loan</h2>
                <p>✔ Special interest rates for defense personnel<br>✔ Flexible repayment up to 7 years<br>✔ Quick approval process<br>✔ Minimal documentation required</p>
                <a href="LoanHome_Enquiry.php" class="apply-btn" target="_blank">Apply Now</a>
            </div>
            <div class="col-md-6">
                <h2>Insurance – Secure Your Future</h2>
                <p>✔ Life Insurance – Financial security for your family<br>✔ Health Insurance – Cashless medical coverage<br>✔ Vehicle Insurance – Protection against accidents & damages<br>✔ Home Insurance – Cover your home against risks<br>✔ Business Insurance – Safeguard your company</p>
                <a href="LoanHome_Enquiry.php" class="apply-btn" target="_blank">Get Insured</a>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>








    <!-- Contact Us Section -->
    <div class="container-fluid contact-section" id="contact">
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
                <h5>🌟 Our Services</h5>
                <ul class="services-list">
                    <li><a href="LoanHome_homeLoan.php" class="text-decoration-none d-block mb-2">🏠 Home Loan</a></li>
                    <li><a href="commercial-vehicle-loan.php" class="text-decoration-none d-block mb-2">🚛 Commercial Vehicle Loan</a></li>
                    <li><a href="personal-loan.php" class="text-decoration-none d-block mb-2">💰 Personal Loan</a></li>
                    <li><a href="mercenary-loan.php" class="text-decoration-none d-block mb-2">🔧 All Type Mercenary Loan</a></li>
                    <li><a href="LoanHome_Business.php" class="text-decoration-none d-block mb-2">📈 Business Loan</a></li>
                    <li><a href="LoanHome_SolarSystem.php" class="text-decoration-none d-block mb-2">☀️ Solar System Financing</a></li>
                    <li><a href="LoanHome_Carloan.php" class="text-decoration-none d-block">🚗 Car Loan (New & Old)</a></li>
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
        //open and close the logo image
        function openFullscreen(image) {
            document.getElementById("fullscreenImage").src = image.src; // Set image source
            document.getElementById("fullscreenContainer").style.display = "flex"; // Show modal
        }

        function closeFullscreen() {
            document.getElementById("fullscreenContainer").style.display = "none"; // Hide modal
        }
        // Close the navbar when clicking outside and on the navbar toggle
        document.addEventListener("click", function (event) {
    let navbar = document.querySelector(".navbar-collapse");
    let toggler = document.querySelector(".navbar-toggler");

    if (navbar.classList.contains("show") && (!navbar.contains(event.target) || toggler.contains(event.target))) {
        let bsCollapse = new bootstrap.Collapse(navbar, {
            toggle: false
        });
        bsCollapse.hide();
    }
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
