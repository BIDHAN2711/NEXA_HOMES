<?php

// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

// Database credentials
$host = "localhost";
$username = "root";
$password = "tw1tw1l1tstr";
$database = "nexahomes";

// Connect to database
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get & sanitize POST data
$name     = mysqli_real_escape_string($conn, $_POST['Name'] ?? '');
$phone    = mysqli_real_escape_string($conn, $_POST['Phone'] ?? '');
$location = mysqli_real_escape_string($conn, $_POST['Location'] ?? '');
$email    = mysqli_real_escape_string($conn, $_POST['Email'] ?? '');

// Insert into realstate_enquiry table
$sql = "INSERT INTO realstate_enquiry (name, phone, location, email) 
        VALUES ('$name', '$phone', '$location', '$email')";

if (mysqli_query($conn, $sql)) {
    // Send email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bidhanbhattacharya2711@gmail.com';     // Your Gmail
        $mail->Password   = 'thzvzuatftmnfarw';                     // Your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('bidhanbhattacharya2711@gmail.com', 'NexaHomes');
        $mail->addAddress('bidhanbhattacharyadeepika@gmail.com'); // Recipient

        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = "📩 New Real Estate Enquiry - $name";
        $mail->Body    = "A new real estate enquiry has been received:\n\n"
                       . "Name: $name\n"
                       . "Phone: $phone\n"
                       . "Location: $location\n"
                       . "Email: $email";

        $mail->send();
        file_put_contents('email_log.log', "Email sent successfully to {$mail->Username}\n", FILE_APPEND);
    } catch (Exception $e) {
        file_put_contents('mail_error.log', "Mailer Error: {$mail->ErrorInfo}\n", FILE_APPEND);
    }

    // Redirect to thank-you page
    header("Location: RealStatethankyou.php?name=" . urlencode($name));
    exit();
} else {
    echo "Database Error: " . mysqli_error($conn);
}

// Close DB connection
mysqli_close($conn);
?>
