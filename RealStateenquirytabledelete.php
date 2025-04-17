<?php
$conn = new mysqli("localhost", "root", "tw1tw1l1tstr", "nexahomes");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM realstate_enquiry WHERE id=$id");
}

header("Location: RealStateenquirytable.php");
exit;
?>
