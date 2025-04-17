<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get the best home loan offers with low interest rates. Apply online today!">
    <meta name="keywords" content="home loan, mortgage, low interest loan, housing finance">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AI-powered home loan chatbot to assist with all your queries.">
    <meta name="keywords" content="home loan, mortgage, AI chatbot, loan assistant">
    <meta name="author" content="NexaHome">

    <title>Home Loan - NexaHome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>

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


        /* Calculator */
        .calculator-container {
            background: rgba(211, 203, 244, 0.54);
            border-radius: 8px;
            padding: 25px;
            max-width: 600px;
            margin: 50px auto;
            box-shadow: 0px 4px 10px rgba(0, 0, 255, 0.1);
            border: 2px solid rgba(43,20,150,255);
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

    .apply-btn1 {
        background-color: #f4d41f;
            color: rgba(43,20,150,255);
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .apply-btn1:hover {
            background-color: #372b9a;
            color: white;
            border-color: white;
            transform: scale(1.05);
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.15);
        }

        



        /* Chat bot */
        .chat-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 80px; /* Increased size */
            height: 80px; /* Increased size */
            border-radius: 48%;
            background: url('') no-repeat center;
            background-size: cover;
            cursor: pointer;
            z-index: 1000;
            transition: transform 0.3s ease;
        }
        .chat-button:hover {
            transform: scale(1.1);
        }
        .chat-box {
            position: fixed;
            bottom: -500px; /* Initially hidden */
            right: 20px;
            width: 350px; /* Increased width */
            height: 500px; /* Increased height */
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px 10px 0 0;
            display: flex;
            flex-direction: column;
            z-index: 1100;
            transition: bottom 0.4s ease-in-out;
        }
        .chat-header {
            background: rgba(43,20,150,255);
            color: white;
            padding: 12px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }
        .chat-content {
            flex-grow: 1;
            padding: 10px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }
        .chat-message {
            background: #f1f1f1;
            padding: 8px;
            border-radius: 5px;
            margin: 5px 0;
            max-width: 80%;
        }
        .user-message {
            background: rgba(43,20,150,255);
            color: white;
            align-self: flex-end;
        }
        .chat-input-container {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        .chat-input {
            flex-grow: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .chat-send {
            background: rgba(43,20,150,255);
            color: white;
            border: none;
            padding: 8px 15px;
            margin-left: 5px;
            cursor: pointer;
            border-radius: 5px;
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

        /* Interst */

        .interest-rate-section {
            text-align: center;
            padding: 20px;
        }
        .interest-rate-section h1
        {
            color: rgba(43,20,150,255);
            font-weight: bold;
        }

        .rate-table {
            max-width: 1000px;
            background: rgba(211, 203, 244, 0.54);
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 10px auto;
        }
        .rate-header {
            background: rgba(43,20,150,255);
            color: white;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
        }
        .table th, .table td {
            padding: 8px;
            font-size: 14px;
            text-align: center;
        }

        /* FAQ section */


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
                <!-- Blog Button (Smaller Size) -->
                <a href="LoanHome_blog.php" class="btn btn-sm fw-bold apply-btn1 mt-2 mt-md-0 ms-md-3 px-3 py-1" target="_blank" rel="noopener noreferrer">
                    BLOG
                </a>
            </div>
        </div>
    </div>
</div>

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
                    <li class="nav-item"><a class="nav-link" href="LoanHome_Business.php#contact">Contact</a></li>
                </ul>
                
                <!-- Apply Button (Properly aligned) -->
                <div class="login-container ms-lg-3">
                    <a href="LoanHome_Enquiry.php" class="btn btn-login">Apply</a>
                </div>
            </div>
        </div>
    </nav>

    

    
    <header style="background-color: rgba(43,20,150,255);" class="text-white text-center p-5">
        <div class="container">
            <h1 class="fw-bold">Affordable Home Loans – <span class="text-warning">Secure Your Dream Home Today</span></h1>
            <p class="mt-3">
                Looking for a <strong>low-interest home loan</strong> with <strong>flexible repayment options</strong>? 
                We offer <strong>hassle-free mortgage solutions</strong> to help <strong>first-time buyers</strong> and 
                homeowners upgrade with ease. Enjoy a seamless approval process and turn your 
                <strong>homeownership dreams into reality</strong>. Apply now and get closer to 
                <span class="text-warning">owning your perfect home!</span>
            </p>
    
            <!-- Apply Now Button -->
            <div class="mt-4">
                <a href="LoanHome_Enquiry.php" class="btn btn-lg fw-bold apply-btn" target="_blank" rel="noopener noreferrer">
                    Apply Online
                </a>
            </div>
        </div>
    </header>
    
    
    <section id="features" class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <h3>Low Interest Rates</h3>
                <p>Enjoy the lowest interest rates in the market.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Quick Processing</h3>
                <p>Get approval within 24 hours.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Minimal Documentation</h3>
                <p>Hassle-free paperwork to make your process smooth.</p>
            </div>
        </div>
    </section>
    
    <div class="calc" id="calculator">
        <div class="container mt-5">
            <div class="row">
                <!-- Left Side - EMI Calculator -->
                <div class="col-md-6">
                    <div class="calculator-container">
                        <h2>Home Loan EMI Calculator</h2>
                        <p>Estimate your monthly home loan EMI with our easy-to-use calculator. Adjust the loan amount, tenure, and interest rate for accurate EMI calculations.</p>
                        <div class="mb-3">
                            <label class="form-label">Loan Amount: ₹<span id="loanAmountOutput">25,00,000</span></label>
                            <input type="range" class="form-range" id="loanAmount" min="100000" max="100000000" value="2500000">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tenure (Years): <span id="tenureOutput">30</span></label>
                            <input type="range" class="form-range" id="tenure" min="1" max="30" value="30">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Interest Rate (% P.A.): <span id="interestRateOutput">8.7%</span></label>
                            <input type="range" class="form-range" id="interestRate" min="0.5" max="15" step="0.1" value="8.7">
                        </div>
                        <hr>
                        <h2 id="emiOutput">₹19,578</h2>
                        <p>Estimated Monthly EMI</p>
                        <h5 id="principalOutput">Principal Amount: ₹25 lakh</h5>
                        <h5 id="interestOutput">Interest Amount: ₹45.48 lakh</h5>
                        <h5 id="totalAmountOutput">Total Amount Payable: ₹70.48 lakh</h5>
                    </div>
                </div>
                <!-- Right Side - Bar Graph -->
                <div class="col-md-6 d-flex align-items-center flex-column">
                    <canvas id="emiChart" width="400" height="400"></canvas>
                </div>
            </div>
            <div class="mt-4">
                <h3>Understanding the EMI Calculation</h3>
                <p>The graph represents the breakup of your loan repayment, showing the principal amount and interest paid over time.</p>
                <p>The Home Loan EMI is calculated using the formula:</p>
                <p><strong>EMI = [P × r × (1 + r)^n] / [(1 + r)^n - 1]</strong></p>
                <p>Where:</p>
                <ul>
                    <li>P = Principal loan amount</li>
                    <li>r = Monthly interest rate (Annual Rate / 12 / 100)</li>
                    <li>n = Loan tenure in months</li>
                </ul>
            </div>
        </div>
    
        
    </div>
    
    
    <!-- Chat bot -->
    
    <div class="chat-button" onclick="toggleChat()">
    <img src="bot1.jpeg" alt="" class="chat-button">
    </div>
    <div class="chat-box" id="chatBox">
        
        <div class="chat-header" onclick="toggleChat()">Chat with Nexa </div>
        <div class="chat-content" id="chatContent">
            <div class="chat-message">How can I help you with Home Loan?</div>
        </div>
        <div class="chat-input-container">
            <input type="text" id="chatInput" class="chat-input" placeholder="Type your question..." onkeypress="handleKeyPress(event)">
            <button class="chat-send" onclick="sendMessage()">Send</button>
        </div>
    </div>

        <!-- Interest part -->

        <div class="interest-rate-section" >
            <h1>Home Loan Interest Rates</h1>
            <p>All rates are benchmarked to Policy Repo Rate. Current applicable Repo Rate = <strong>6.25%</strong></p>
        
            <div class="container">
                <!-- Special Housing Loan Rates -->
                <div class="rate-table">
                    <div class="rate-header">
                        Special Housing Loan Rates for Salaried & Self Employed (Professionals & Non-Professionals)
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Loan Slab</th>
                                    <th>Interest Rates (% p.a.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>For All Loans*</strong></td>
                                    <td>Policy Repo Rate + 2.45% to 3.30% = <strong>8.70% to 9.55%</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        
                <!-- Standard Housing Loan Rates -->
                <div class="rate-table">
                    <div class="rate-header">
                        Standard Housing Loan Rates for Salaried & Self Employed (Professionals & Non-Professionals)
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Loan Slab</th>
                                    <th>Interest Rates (% p.a.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>For All Loans*</strong></td>
                                    <td>Policy Repo Rate + 3.15% to 3.70% = <strong>9.40% to 9.95%</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- FaQ Questions -->

    <section id="faq" class="container my-5">
        <h2 class="text-center mb-4">Frequently Asked Questions for Housing Loans</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                        What is a Home Loan?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        A home loan is a financial product provided by banks or financial institutions that helps individuals purchase a residential property. The loan is repaid over time with interest, usually in monthly installments.
                    </div>
                </div>
            </div>
    
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                        How do I apply for a Home Loan?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ol>
                            <li>Sign Up / Register</li>
                            <li>Fill in the home loan application form</li>
                            <li>Upload required documents</li>
                            <li>Pay processing fee</li>
                            <li>Get loan approval</li>
                        </ol>
                    </div>
                </div>
            </div>
    
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                        What are the eligibility criteria for a Home Loan?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>Applicant must be between 21-65 years old</li>
                            <li>Stable source of income</li>
                            <li>Good credit score (preferably 750+)</li>
                            <li>Minimum work experience of 2 years</li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                        What documents are required for a Home Loan?
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li>Identity Proof (Aadhar, PAN, Passport)</li>
                            <li>Address Proof (Utility Bills, Ration Card)</li>
                            <li>Income Proof (Salary Slips, ITR, Bank Statements)</li>
                            <li>Property Documents</li>
                            <li>Loan Agreement</li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                        What is the maximum loan tenure?
                    </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        The maximum loan tenure can go up to 30 years depending on the borrower's eligibility and lender policies.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <div class="container-fluid contact-section" id="LoanHome_contact">
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


            //Calculator Functioning
            function formatIndianNumber(num) {
                return new Intl.NumberFormat('en-IN').format(num);
            }
            
            function calculateEMI() {
                let P = parseFloat(document.getElementById('loanAmount').value);
                let r = parseFloat(document.getElementById('interestRate').value) / 12 / 100;
                let n = parseFloat(document.getElementById('tenure').value) * 12;
                let EMI = (P * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
                let totalAmount = EMI * n;
                let interestAmount = totalAmount - P;
                
                document.getElementById('emiOutput').innerText = `₹${formatIndianNumber(Math.round(EMI))}`;
                document.getElementById('principalOutput').innerText = `Principal Amount: ₹${formatIndianNumber(P)}`;
                document.getElementById('interestOutput').innerText = `Interest Amount: ₹${formatIndianNumber(Math.round(interestAmount))}`;
                document.getElementById('totalAmountOutput').innerText = `Total Amount Payable: ₹${formatIndianNumber(Math.round(totalAmount))}`;
                updateChart(P, interestAmount);
            }
            
            function updateChart(principal, interest) {
                emiChart.data.labels = ['Principal Amount', 'Interest Amount'];
                emiChart.data.datasets[0].data = [principal, interest];
                emiChart.update();
            }
            
            document.querySelectorAll('input[type=range]').forEach(element => {
                element.addEventListener('input', function() {
                    let outputId = this.id + 'Output';
                    document.getElementById(outputId).innerText = this.id === 'interestRate' ? `${this.value}%` : formatIndianNumber(this.value);
                    calculateEMI();
                });
            });
            
            var ctx = document.getElementById('emiChart').getContext('2d');
            var emiChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Loan Breakdown',
                        data: [],
                        backgroundColor: ['rgba(43,20,150,255)', '#ff5733'],
                        borderColor: ['#0056b3', '#c70039'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: { title: { display: true, text: 'Amount (₹)' } }
                    }
                }
            });
            
            calculateEMI();


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

//Navbar image open close
function openFullscreen(image) {
            document.getElementById("fullscreenImage").src = image.src; // Set image source
            document.getElementById("fullscreenContainer").style.display = "flex"; // Show modal
        }

        function closeFullscreen() {
            document.getElementById("fullscreenContainer").style.display = "none"; // Hide modal
        }


        // Chat bot basic Functioning

        function toggleChat() {
        const chatBox = document.getElementById("chatBox");
        const button = document.querySelector(".chat-button");

        if (chatBox.style.bottom === "-500px" || chatBox.style.bottom === "") {
            chatBox.style.bottom = "0";
            button.style.opacity = "0"; // Hide button
        } else {
            chatBox.style.bottom = "-500px";
            button.style.opacity = "1"; // Show button
        }
    }

    function sendMessage() {
        const inputField = document.getElementById("chatInput");
        const message = inputField.value.trim();
        if (message === "") return;

        displayMessage(message, "user-message");
        inputField.value = "";

        setTimeout(() => {
            showTypingIndicator();
            setTimeout(() => {
                hideTypingIndicator();
                processUserMessage(message.toLowerCase());
            }, 1500);
        }, 500);
    }

    function handleKeyPress(event) {
        if (event.key === "Enter") {
            sendMessage();
        }
    }

    function processUserMessage(message) {
        if (["hi", "hello", "hey"].includes(message)) {
            const botResponse = "Welcome to NexaHomes! 🏡💰 Your one-stop solution for Home, Personal, Car, Business, Mercenary, and Solar System Loans. Let me know how I can assist you today! 😊";
            displayMessage(botResponse, "bot-message");
        } else {
            const botResponse = "Looking for financial support? 💰 Whether it's a home, personal, or business loan, we've got you covered! Welcome to NexaHomes! 🏡 Let me know how I can assist you today. 😊";
            displayMessage(botResponse, "bot-message");
        }
        showLoanOptions();
    }

    function showTypingIndicator() {
        const chatContent = document.getElementById("chatContent");
        const typingDiv = document.createElement("div");
        typingDiv.id = "typing-indicator";
        typingDiv.className = "chat-message bot-message";
        typingDiv.textContent = "Typing...";
        chatContent.appendChild(typingDiv);
        chatContent.scrollTop = chatContent.scrollHeight;
    }

    function hideTypingIndicator() {
        const typingDiv = document.getElementById("typing-indicator");
        if (typingDiv) typingDiv.remove();
    }

    function showLoanOptions() {
        const chatContent = document.getElementById("chatContent");
        const optionsDiv = document.createElement("div");
        optionsDiv.className = "loan-options";

        const loanTypes = ["Home Loan", "Personal Loan", "Car Loan", "Business Loan", "Mercenary Loan", "Solar System Loan", "Commercial Vehicle Loan"];
        loanTypes.forEach(type => {
            const button = document.createElement("button");
            button.className = "loan-button";
            button.textContent = type;
            button.onclick = () => displayLoanDetails(type);
            optionsDiv.appendChild(button);
        });

        chatContent.appendChild(optionsDiv);
        chatContent.scrollTop = chatContent.scrollHeight;
    }

    function displayLoanDetails(loanType) {
        displayMessage(loanType, "user-message");
        showTypingIndicator();

        setTimeout(() => {
            hideTypingIndicator();
            const loanDetails = getLoanDescription(loanType);
            displayMessage(loanDetails, "bot-message");
            showActionButtons();
        }, 1500);
    }

    function getLoanDescription(loanType) {
        const descriptions = {
            "Home Loan": "🏡 Buy your dream home with ease! Get low-interest rates and flexible repayment options.",
            "Personal Loan": "💸 Need urgent funds? Our personal loans offer quick approvals with minimal paperwork.",
            "Car Loan": "🚗 Drive home your dream car with affordable EMIs and instant loan approvals.",
            "Business Loan": "📈 Expand your business with our flexible business loans. Fast processing & easy eligibility!",
            "Mercenary Loan": "💼 Special loans designed for professionals and self-employed individuals to fuel your ambitions.",
            "Solar System Loan": "🌞 Go green! Finance your solar energy system with low-cost loans and easy repayment options.",
            "Commercial Vehicle Loan": "🚛 Get funding for trucks, vans, and commercial vehicles with easy repayment plans."
        };

        return descriptions[loanType] + " 💰 Apply online today and take the next step!";
    }

    function showActionButtons() {
        const chatContent = document.getElementById("chatContent");
        const buttonsDiv = document.createElement("div");
        buttonsDiv.className = "action-buttons";

        const applyButton = document.createElement("button");
        applyButton.className = "styled-button";
        applyButton.textContent = "Apply Online";
        applyButton.onclick = () => window.open("LoanHome_Enquiry.php", "_blank");

        const chatButton = document.createElement("button");
        chatButton.className = "styled-button";
        chatButton.textContent = "Chat with Us";
        chatButton.onclick = () => {
        window.location.href = "https://wa.me/9839782220";
        };


        buttonsDiv.appendChild(applyButton);
        buttonsDiv.appendChild(chatButton);

        chatContent.appendChild(buttonsDiv);
        chatContent.scrollTop = chatContent.scrollHeight;
    }

    function displayMessage(text, className = "") {
        const chatContent = document.getElementById("chatContent");
        const messageDiv = document.createElement("div");
        messageDiv.className = "chat-message " + className;
        messageDiv.textContent = text;
        chatContent.appendChild(messageDiv);
        chatContent.scrollTop = chatContent.scrollHeight;
    }

     // Close chatbot when clicking outside
     document.addEventListener("click", function (event) {
        const chatBox = document.getElementById("chatBox");
        const button = document.querySelector(".chat-button");

        if (!chatBox.contains(event.target) && !button.contains(event.target)) {
            chatBox.style.bottom = "-500px";
            button.style.opacity = "1"; // Show chat button
        }
    });    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


