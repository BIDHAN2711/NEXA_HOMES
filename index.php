<!DOCTYPE html>
<html lang="en">
<head>
  <title>NexaHomes Landing Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Navbar Brand */
    .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }
    .navbar-brand img {
            height: 70px;
            margin-right: 15px;
            border-radius: 40px;
        }
  </style>
  <script>
    // Toggle mobile nav
    function toggleNav() {
      const navLinks = document.getElementById('nav-links');
      navLinks.classList.toggle('hidden');
    }

    //logo image open and close
  function openFullscreen(image) {
    const fullscreenImage = document.getElementById("fullscreenImage");
    const fullscreenContainer = document.getElementById("fullscreenContainer");

    fullscreenImage.src = image.src;
    fullscreenContainer.classList.remove("hidden");
  }

  function closeFullscreen(event) {
    const fullscreenImage = document.getElementById("fullscreenImage");
    // Close only if clicking outside the image
    if (!fullscreenImage.contains(event.target)) {
      document.getElementById("fullscreenContainer").classList.add("hidden");
    }
  }



  </script>
</head>
<!-- Fullscreen Logo Modal -->
<div id="fullscreenContainer" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden" onclick="closeFullscreen(event)">
  <img id="fullscreenImage" class="max-w-full max-h-full rounded-lg shadow-2xl" alt="Fullscreen Logo" />
</div>

<body class="bg-gray-50 text-gray-800">

  <!-- Navigation -->
  <nav class="bg-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <!-- Clickable Image -->
<a class="navbar-brand">
  <img src="logo.png" alt="NexaHome Logo" class="me-2" onclick="openFullscreen(this)">
</a>
      <div class="md:hidden">
        <button onclick="toggleNav()" class="text-indigo-600 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
      <div class="hidden md:flex items-center space-x-8 text-gray-700 font-medium">
        <a href="#" class="hover:text-indigo-500">Home</a>
        <a href="Landing_aboutus.php#services" class="hover:text-indigo-500">Services</a>
        <a href="Landing_aboutus.php" class="hover:text-indigo-500">About</a>
        <a href="Landing_contactus.php#contact" class="hover:text-indigo-500">Contact</a>
      </div>
      <div class="hidden md:flex items-center space-x-4">
        <a href="admin.php" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">Admin Panel</a>
        <a href="#cards" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">Get Started</a>
      </div>
      
    </div>
    <!-- Mobile nav links -->
    <div id="nav-links" class="md:hidden hidden px-6 pb-4 space-y-2 text-gray-700 font-medium bg-white">
      <a href="#" class="block hover:text-indigo-500">Home</a>
      <a href="Landing_aboutus.php#services" class="block hover:text-indigo-500">Services</a>
      <a href="Landing_aboutus.php" class="block hover:text-indigo-500">About</a>
      <a href="Landing_contactus.php#contact" class="block hover:text-indigo-500">Contact</a>
      <a href="admin.php" class="block bg-gray-700 text-white text-center px-4 py-2 rounded-lg hover:bg-gray-800 transition">Admin Panel</a>
      <a href="#cards" class="block bg-indigo-600 text-white text-center px-4 py-2 rounded-lg hover:bg-indigo-700 transition">Get Started</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="text-center py-16 bg-gradient-to-r from-indigo-100 to-purple-100">
    <div class="container mx-auto px-6">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-6 text-indigo-700">
        NexaHomes Fintech Realstate and Marketing Private Limited
      </h1>
      <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto">
        Transforming your home buying, financing, and shopping experience with cutting-edge solutions.
      </p>
    </div>
  </section>

  <!-- Cards Section -->
  <section id="cards" class="container mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Home Loan Card -->
    <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-indigo-300 transition-transform transform hover:-translate-y-2 hover:scale-105">
      <div class="bg-indigo-100 w-14 h-14 rounded-full flex items-center justify-center mb-4">
        <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
        </svg>
      </div>
      <h2 class="text-xl font-semibold mb-2 text-indigo-700">NexaHomes Home Loan</h2>
      <p class="text-gray-600 mb-4">Competitive rates and quick approvals to turn your dream into a home.</p>
      <ul class="text-sm text-gray-700 space-y-1 mb-6">
        <li>• Low interest rates from 6.5%</li>
        <li>• Quick approvals within 24 hours</li>
        <li>• Zero processing fee (limited time)</li>
      </ul>
      <a href="LoanHome.php" target="_blank" class="block text-center bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">Apply Now</a>
    </div>

    <!-- Real Estate Card -->
    <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-purple-300 transition-transform transform hover:-translate-y-2 hover:scale-105">
      <div class="bg-purple-100 w-14 h-14 rounded-full flex items-center justify-center mb-4">
        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
      </div>
      <h2 class="text-xl font-semibold mb-2 text-purple-700">NexaHomes Real Estate</h2>
      <p class="text-gray-600 mb-4">Find your perfect property with our expert support and listings.</p>
      <ul class="text-sm text-gray-700 space-y-1 mb-6">
        <li>• Exclusive property listings</li>
        <li>• Virtual property tours</li>
        <li>• Personalized property matching</li>
      </ul>
      <a href="RealState.php" target="blank" class="block text-center bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition">Explore Properties</a>
    </div>

    <!-- Shopping Card -->
    <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-pink-300 transition-transform transform hover:-translate-y-2 hover:scale-105">
      <div class="bg-pink-100 w-14 h-14 rounded-full flex items-center justify-center mb-4">
        <svg class="w-7 h-7 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
        </svg>
      </div>
      <h2 class="text-xl font-semibold mb-2 text-pink-700">NexaHomes Shopping</h2>
      <p class="text-gray-600 mb-4">Furniture, appliances & more to make your house a dream home.</p>
      <ul class="text-sm text-gray-700 space-y-1 mb-6">
        <li>• Premium home furnishings</li>
        <li>• Interior design consultation</li>
        <li>• Special discounts for loan customers</li>
      </ul>
      <button class="w-full bg-pink-600 text-white py-2 rounded hover:bg-pink-700 transition">Coming Soon</button>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="text-center py-12 bg-white">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Begin Your NexaHomes Journey?</h2>
    <p class="text-lg text-gray-600 mb-6 max-w-2xl mx-auto">Join thousands of satisfied customers who’ve found their dream homes through NexaHomes.</p>
    <a href="Landing_aboutus.php" class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white px-6 py-3 rounded-lg hover:from-indigo-600 hover:to-purple-600 transition text-lg font-medium">Learn More</a>
  </section>

  <!-- Footer -->
   <!-- Scroll to Top Button -->
  <button id="scrollToTopBtn" 
          class="hidden fixed bottom-4 left-4 z-50 bg-gray-800 text-white px-4 py-2 rounded-md shadow-md text-sm hover:bg-gray-700 transition duration-300">
    ↑
  </button>

  <footer class="bg-gray-100 py-8">
    <div class="container mx-auto px-6 text-center">
      <div class="flex justify-center space-x-6 text-gray-600 text-sm mb-4">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="Landing_contactus.php#contact">Contact Us</a>
      </div>
      <div class="text-gray-400 text-xs">
        © 2025 NexaHomes Fintech Realstate and Marketing Private Limited. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Script -->
  <script>
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", () => {
      if (window.scrollY > 100) {
        scrollToTopBtn.classList.remove("hidden");
      } else {
        scrollToTopBtn.classList.add("hidden");
      }
    });

    scrollToTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
  </script>

</body>
</html>
