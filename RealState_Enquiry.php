<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Enquiry Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background: url('RealState_Enquirypic.jpg') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: -1;
    }

    .container {
      background: rgba(255, 255, 255, 0.9);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
      max-width: 600px;
      transition: 0.2s;
    }

    .container:hover {
      transform: scale(1.01);
    }

    h2 {
      font-size: 28px;
      font-weight: 700;
      color: rgba(43,20,150,255);
    }

    .lead {
      font-size: 16px;
      color: #555;
    }

    label {
      font-weight: 600;
      color: #333;
    }

    .form-control {
      border-radius: 8px;
      padding: 12px;
      border: 1.5px solid #ccc;
      transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .form-control:focus {
      border-color: rgba(43,20,150,255);
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
    }

    .btn-primary {
      background: linear-gradient(to right, #007bff, #0056b3);
      border: none;
      padding: 12px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 30px;
      transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
      background: linear-gradient(to right, #0056b3, #003c7c);
      transform: scale(1.02);
      box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
    }

    #enquiryAlert {
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="overlay"></div>

  <div class="container text-center">
    <h2 class="mb-3">One Step Closer to Your Perfect Property</h2>
    <p class="lead mb-4">
      <strong> Quick, clear, and confidential – share your enquiry and our specialists will respond within minutes.</strong>
    </p>

    <form id="enquiryForm" action="RealState_connect.php" method="POST" class="text-left">
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" class="form-control" name="Name" id="name" placeholder="Enter your full name" required />
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" name="Phone" id="phone" placeholder="Enter your phone number" required />
      </div>

      <div class="form-group">
        <label for="location">Your Location</label>
        <input type="text" class="form-control" name="Location" id="location" placeholder="City, Area, etc." required />
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" name="Email" id="email" placeholder="Enter your email address" required />
      </div>

      <button type="submit" class="btn btn-primary btn-block">Submit Enquiry</button>
    </form>
  </div>
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
