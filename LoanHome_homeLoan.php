<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apply for Nexa Homes Loan with ease. Find out the required documents, eligibility, and benefits for salaried and self-employed applicants.">
    <meta name="keywords" content="Home Loan, Nexa Homes Loan, Housing Loan, Loan Documents, Plot Purchase Loan, Construction Loan">
    <meta name="author" content="NexaHome">
    
    <title>NexaHome Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: rgba(211, 203, 244, 0.54);
            color: #333;
            font-family: 'Arial', sans-serif;
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

        .search-bar {
    position: relative;
    display: flex;
    align-items: center;
}

.suggestions-list {
    position: absolute;
    width: 100%;
    background: white;
    border: 1px solid #ccc;
    list-style: none;
    padding: 0;
    margin-top: 5px;
    max-height: 200px;
    overflow-y: auto;
    display: none;
    z-index: 1000;
}

.suggestions-list li {
    padding: 10px;
    cursor: pointer;
}

.suggestions-list li:hover {
    background: #f0f0f0;
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

        /* Content section */
        .hero-section {
            margin-bottom: 15px;
            background: linear-gradient(to right, #fefefe, #f0f0ff);
            padding: 50px 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .hero-img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
        h1,h2, h3 {
            color: #4a148c;
        }
        ul {
            padding-left: 1.2rem;
        }
        .section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        /* Apply now Button */
        .apply-btn {
        background-color: #f4d41f; 
        color: black;
        border: 2px solid #f4d41f;
        padding: 12px 30px;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
        display: inline-block;
        }

        .apply-btn:hover {
        background-color: rgba(43,20,150,255);
        color: white;
        border-color: white;
        }
    </style>
</head>
<body>

    <!-- Bootstrap Container for Contact Info -->


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
                    <li class="nav-item"><a class="nav-link" href="LoanHome_homeLoan.php#contact">Contact</a></li>
                </ul>
                
                <!-- Apply Button (Properly aligned) -->
                <div class="login-container ms-lg-3">
                    <a href="LoanHome_Enquiry.php" class="btn btn-login">Apply</a>
                </div>
            </div>
        </div>
    </nav>

   <!-- Content Section --> 
    <div class="container my-5">
        <div class="row align-items-center hero-section">
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">Dreaming of Your Own Home? Choose Nexa Homes Loan</h1>
                <p class="lead">Our home loan is packed with exclusive features and benefits. Whether it's buying a plot, constructing your dream home, or extending your current residence — <strong>Nexa Homes Loan</strong> is here for you. Use our <strong>Home Loan Calculator</strong> to estimate interest and more!</p>
                <div class="mt-4">
                    <a href="LoanHome_Enquiry.php" class="btn btn-lg fw-bold apply-btn" target="_blank" rel="noopener noreferrer">
                        Apply Online
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="LoanHome_HomeloanWebpic.jpg" alt="Happy Couple Signing Home Loan" class="hero-img">
            </div>
        </div>

        <div class="section">
            <h2>Documents Required for Home Loan</h2>
            <p>To process your home loan, banks require various documents to verify your identity and creditworthiness. Make sure to submit the necessary paperwork mentioned in the application form.</p>

            <h3>Key Documents</h3>
            <ul>
                <li>Duly filled and signed Home Loan Application Form</li>
                <li>2 Passport size photographs (1 attested on the form)</li>
                <li>Identity Proof (PAN, Aadhaar, Passport, DL, Voter ID)</li>
                <li>Age Proof (PAN, Aadhaar, Passport, DL, Birth Certificate)</li>
                <li>Address Proof (Aadhaar, Passport, DL, Passbook, Utility Bills)</li>
            </ul>

            <h3>For Salaried Individuals</h3>
            <ul>
                <li>Form 16</li>
                <li>Employer’s letter certifying employment</li>
                <li>Last 3–6 months salary slips</li>
                <li>Last 3 years IT Returns</li>
                <li>Investment proofs, if any</li>
                <li>Bank statement showing salary credit</li>
            </ul>

            <h3>For Self-Employed Individuals</h3>
            <ul>
                <li>Business address proof</li>
                <li>Past 3 years' IT returns</li>
                <li>Audited Balance Sheet and P&L Statement</li>
                <li>Business license/professional registration</li>
                <li>Establishment registration documents</li>
                <li>Business bank account statements</li>
            </ul>

            <h3>Property Documents</h3>
            <ul>
                <li>No Objection Certificate (NOC)</li>
                <li>Original sale deed, allotment letter, or stamped agreement</li>
                <li>Occupancy certificate</li>
                <li>Maintenance bills, electricity bills, tax receipts</li>
                <li>Advance payment receipts</li>
                <li>Building plan for flats/villas</li>
                <li>Land tax receipt and possession certificate</li>
                <li>Bank statement of payment to seller or builder</li>
                <li>Detailed estimate of construction cost (for construction loans)</li>
            </ul>
        </div>
    </div>




    <div class="container-fluid contact-section" id="contact">
        <div class="row">  
            <!-- Contact Us Section -->
            
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <a href="tel:+919839782220">📞 Service Request / Queries</a>
                <a href="tel:+919839782220">📢 Helpline Number</a>
                <a href="https://www.google.com/maps/search/?api=1&query=21-W2,+Damodar+Nagar,+Opp.+Sarojani+Medical+Centre" target="_blank">
                    <img src="https://static.vecteezy.com/system/resources/previews/012/871/377/original/google-maps-icon-google-product-illustration-free-png.png" alt="Google Maps" class="map-icon"> Locate Us
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=nexahomes.kanpur@gmail.com" target="_blank">📩 Chat via Gmail</a>
                <h5 class="mt-3"><strong>Nexa Homes Fintech Pvt. Ltd.</strong></h5>
                <p class="company-address">📍 21-W2, Damodar Nagar, Opp. Sarojani Medical Centre, kanpur</p>
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


let sections = {
    "home": "home",
    "about": "about",
    "emi calculator": "emi",
    "blog": "blog",
    "home loan": "home-loan",
    "personal loan": "personal-loan",
    "business loan": "business-loan",
    "car loan": "car-loan",
    "mercenary loan": "mercenary-loan",
    "commercial loan": "commercial-loan",
    "solar system loan": "solar-loan"
};

function searchPage() {
    let query = document.getElementById("searchInput").value.toLowerCase().trim();

    for (let key in sections) {
        if (query.includes(key)) {
            document.getElementById(sections[key]).scrollIntoView({ behavior: "smooth" });
            return;
        }
    }
    alert("No matching section found. Try a different search term.");
}

// Show suggestions based on user input
function showSuggestions() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let suggestionsBox = document.getElementById("suggestionsList");
    suggestionsBox.innerHTML = ""; // Clear previous suggestions

    if (input === "") {
        suggestionsBox.style.display = "none";
        return;
    }

    let matches = Object.keys(sections).filter(term => term.includes(input));
    if (matches.length === 0) {
        suggestionsBox.style.display = "none";
        return;
    }

    matches.forEach(match => {
        let item = document.createElement("li");
        item.textContent = match;
        item.onclick = function () {
            document.getElementById("searchInput").value = match;
            searchPage();
            suggestionsBox.style.display = "none"; // Hide suggestions after selection
        };
        suggestionsBox.appendChild(item);
    });

    suggestionsBox.style.display = "block";
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
