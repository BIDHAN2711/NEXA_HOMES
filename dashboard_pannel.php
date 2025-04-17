<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Simple Dynamic Admin Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Topbar -->
  <header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-gray-800">Admin Dashboard</h1>
    <a href="login_security.php" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
    </header>

  <div class="flex flex-1">
    <!-- Sidebar -->
    <aside class="bg-white w-64 hidden md:block shadow-md">
      <nav class="p-6 space-y-4">
        <a href="loanenquirytable.php" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-blue-100 rounded-md" >🏠 HomeLoan Enquiry</a>
        <a href="RealStateenquirytable.php" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-green-100 rounded-md">🏢 RealEstate Enquiry</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <div id="mainContent" class="bg-white p-10 rounded-lg shadow text-center text-2xl font-semibold text-gray-700">
        Welcome to your Admin Panel!
      </div>
    </main>
  </div>

  <script>
    function loadContent(name) {
      const main = document.getElementById('mainContent');
      main.innerHTML = `<div class="text-3xl font-bold text-blue-700">${name}</div>`;
    }
  </script>

<script>
    window.onload = function () {
        if (window.performance && window.performance.navigation.type === 2) {
            // If page was accessed by back/forward button
            location.reload(true);
        }
    };
</script>


</body>
</html>




