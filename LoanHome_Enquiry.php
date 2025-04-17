<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apply for a home loan online with fast approval and low-interest rates. Get hassle-free mortgage solutions today.">
    <meta name="keywords" content="home loan, mortgage, housing finance, loan application, easy home loan">
    <meta name="author" content="NexaHome">
    <title>Apply Online Form</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(140, 124, 220, 0.85);
            margin: 0;
            padding: 0;
            overflow: auto; /* Allows scrolling */
        }

        .container-wrapper {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        /* Left Section */
        .left-section {
            width: 50%;
            height: 100vh;
            position: relative;
        }

        .left-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Right Section */
        .right-section {
            width: 50%;
            padding: 40px;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: 10px solid rgba(140, 124, 220, 0.85);
            border-radius: 50px;
            box-shadow: -5px 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Centered Text */
        .loan-box {
            text-align: center;
        }

        /* Tabs */
        .nav-tabs {
            display: flex;
            justify-content: center;
            border-bottom: 2px solid #ddd;
        }

        .nav-tabs .nav-item {
            flex: 1;
            text-align: center;
        }

        .nav-tabs .nav-link {
            width: 100%;
            color: rgba(43,20,150,255);
            font-weight: bold;
            border-radius: 0;
            padding: 10px;
            font-size: 14px;
        }

        .nav-tabs .nav-link.active {
            background-color: rgba(43,20,150,255);
            color: white;
        }

        /* Form Inputs */
        .form-control {
            height: 45px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: rgba(43,20,150,255);
            border: none;
            width: 100%;
            height: 45px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Mobile Responsiveness */
        @media (max-width: 992px) {
            .container-wrapper {
                flex-direction: column;
                height: auto;
            }
            .left-section {
                width: 100%;
                height: auto;
            }
            .left-section img {
                width: 100%;
                height: auto;
            }
            .right-section {
                width: 100%;
                padding: 30px;
                border-radius: 30px;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="container-wrapper">
        <!-- Left Section -->
        <div class="left-section">
            <img src="LoanHome_EnquiryPic.jpg" alt="Happy Family">
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <div class="loan-box">
                <p>Speedy Process • Fully Online • No Paperwork</p>
                <h2>Apply Online & Get Instant Home Loan Assistance</h2>
                <h4>Get a Call from Our Loan Experts</h4>
            </div>

            <!-- Tabs for Resident & Non-Resident Indian -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#resident">Resident Indian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#non-resident">Non-Resident Indian</a>
                </li>
            </ul>

            <div class="tab-content mt-3">
                <!-- Resident Indian Form -->
                <div id="resident" class="tab-pane fade show active">
                <form  action="LoanHome_connect.php" method="POST">
                        <!-- Hidden options -->
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_template" value="table">
                        <input type="hidden" name="_subject" value="New Form Submission from Website">
                      
                        <div class="mb-3">
                            <label>Name*</label>
                            <input type="text" name="Name" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label>City*</label>
                            <input type="text" name="City" class="form-control" placeholder="Enter City" required>
                        </div>
                        <div class="mb-3">
                            <label>Mobile No*</label>
                            <div class="input-group">
                                <span class="input-group-text">+91</span>
                                <input type="tel" name="Mobile" class="form-control" placeholder="Enter Mobile No." required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Email*</label>
                            <input type="email" name="Email" class="form-control" placeholder="Enter Email" required>
                        </div>
                      
                        <button type="submit" class="btn btn-primary" >SUBMIT</button>
                </form>
                </div>

               <!-- Non-Resident Indian Form -->
<div id="non-resident" class="tab-pane fade">
    <form id="nriForm">
        <div class="mb-3">
            <label>Name*</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
        </div>
        <div class="mb-3">
            <label>Country*</label>
            <select class="form-control" name="country" required>
                <option value="" disabled selected>Select</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <option value="UAE">UAE</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Mobile No*</label>
            <div class="input-group">
                <span class="input-group-text">+91</span>
                <input type="tel" name="mobile" class="form-control" placeholder="Enter Mobile No." required>
            </div>
        </div>
        <div class="mb-3">
            <label>Email*</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    
</div>


    


    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
