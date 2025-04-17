<?php
$conn = new mysqli("localhost", "root", "tw1tw1l1tstr", "nexahomes");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$data = ['id' => '', 'Name' => '', 'City' => '', 'Mobile' => '', 'Email' => ''];

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM enquiry_loans WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE enquiry_loans SET Name = ?, City = ?, Mobile = ?, Email = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $name, $city, $mobile, $email, $id);
    
    if ($stmt->execute()) {
        header("Location: loanenquirytable.php");
        exit;
    } else {
        echo "Update failed: " . $stmt->error;
    }

    $stmt->close();
}
?>
<!-- ✅ Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Edit Record</h2>

<form method="POST" class="max-w-xl mx-auto bg-white p-6 rounded-2xl shadow space-y-5">
    <input type="hidden" name="id" value="<?= htmlspecialchars($data['id']) ?>">

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($data['Name']) ?>"
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
        <input type="text" id="city" name="city" value="<?= htmlspecialchars($data['City']) ?>"
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
        <label for="mobile" class="block text-sm font-medium text-gray-700 mb-1">Mobile</label>
        <input type="text" id="mobile" name="mobile" value="<?= htmlspecialchars($data['Mobile']) ?>"
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="text" id="email" name="email" value="<?= htmlspecialchars($data['Email']) ?>"
               class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="text-center">
        <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
            Update
        </button>
    </div>
</form>

