<?php
session_start();

// Database config
$host = "localhost";
$user = "root";
$pass = "tw1tw1l1tstr";
$dbname = "nexahomes"; 

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form
if (isset($_POST['login'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query user (replace with your actual table and column names)
    $sql = "SELECT * FROM manage_admin WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // For now, assuming password is stored in plain text (not recommended)
        if ($user['password'] === $password) {
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard_pannel.php"); // redirect to dashboard or any page
            exit;
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo " User not found or inactive.";
    }
}
?>
