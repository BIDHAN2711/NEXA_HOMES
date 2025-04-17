<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4">

    <?php
        // Get user's name from URL (if present)
        $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
    ?>

    <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl max-w-md w-full text-center">
        <h1 class="text-3xl md:text-4xl font-bold text-green-600 mb-4">
            Thank You<?= $name ? ", $name" : "" ?>!
        </h1>
        <p class="text-gray-700 text-lg md:text-xl mb-6">Your form has been submitted successfully.</p>
        <a href="LoanHome.php" class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg text-base md:text-lg transition duration-200">
            Go Back to Home
        </a>
    </div>

</body>
</html>
