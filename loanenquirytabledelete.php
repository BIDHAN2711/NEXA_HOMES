<?php
$conn = new mysqli("localhost", "root", "tw1tw1l1tstr", "nexahomes");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM enquiry_loans WHERE id=$id");
}

header("Location: loanenquirytable.php");
exit;
?>
