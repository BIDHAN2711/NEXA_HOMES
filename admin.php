<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
    <h2 class="text-2xl font-bold mb-6 text-center text-indigo-600">Admin Login</h2>
    <?php if (isset($error)) echo "<p class='text-red-500 mb-4'>$error</p>"; ?>
    <form method="POST" action="database.php" class="space-y-4">
      <div>
        <label class="block text-gray-700">Username</label>
        <input type="text" name="username" required class="w-full px-3 py-2 border rounded">
      </div>
      <div>
        <label class="block text-gray-700">Password</label>
        <input type="password" name="password" required class="w-full px-3 py-2 border rounded">
      </div>
      <button type="submit" name="login" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">Login</button>
    </form>
  </div>
</body>
</html>


