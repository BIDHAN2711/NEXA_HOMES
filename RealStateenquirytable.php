<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
// Connect to DB
$conn = new mysqli("localhost", "root", "tw1tw1l1tstr", "nexahomes");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Fetch data
$result = $conn->query("SELECT * FROM realstate_enquiry");
?>

<div class="min-h-screen bg-gray-100 p-6">
  <h2 class="text-2xl font-bold mb-4 text-gray-800">🏢 RealEstate Enquiry</h2>

  <!-- ✅ Download Button -->
  <div class="flex justify-end mb-4">
    <a href="RealState_downloadexcel.php" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
      ⬇️ Download Excel
    </a>
  </div>

  <div class="overflow-x-auto bg-white rounded-xl shadow">
    <table class="min-w-full divide-y divide-gray-200 text-sm">
      <thead class="bg-gray-50 text-gray-700 text-left">
        <tr>
          <th class="px-4 py-3 font-semibold">ID</th>
          <th class="px-4 py-3 font-semibold">Name</th>
          <th class="px-4 py-3 font-semibold">Phone</th>
          <th class="px-4 py-3 font-semibold">Location</th>
          <th class="px-4 py-3 font-semibold">Email</th>
          <th class="px-4 py-3 font-semibold">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 text-gray-800">
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2"><?= $row['id'] ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($row['Name']) ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($row['Phone']) ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($row['Location']) ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($row['Email']) ?></td>
            <td class="px-4 py-2 space-x-2">
              <a href="RealStateenquirytableedit.php?id=<?= $row['id'] ?>" class="inline-block bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Edit</a>
              <a href="RealStateenquirytabledelete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')" class="inline-block bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">Delete</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>

<?php $conn->close(); ?>
