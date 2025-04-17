<?php
// PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // Path to Composer's autoload.php

// DB config
$host = "localhost";
$user = "root";
$password = "tw1tw1l1tstr";
$database = "nexahomes";

// Connect to MySQL
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Form submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name   = mysqli_real_escape_string($conn, $_POST['Name']);
    $city   = mysqli_real_escape_string($conn, $_POST['City']);
    $mobile = mysqli_real_escape_string($conn, $_POST['Mobile']);
    $email  = mysqli_real_escape_string($conn, $_POST['Email']);

    // Save to DB
    $sql = "INSERT INTO enquiry_loans (Name, City, Mobile, Email) VALUES ('$name', '$city', '$mobile', '$email')";
    if (mysqli_query($conn, $sql)) {
        // Successfully inserted into database
    } else {
        file_put_contents('db_error.log', "DB Error: " . mysqli_error($conn) . "\n", FILE_APPEND);
    }
    mysqli_close($conn);



    curl_close($ch);

    // Email via PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'bidhanbhattacharya2711@gmail.com';        // ✅ your Gmail address
        $mail->Password   = 'thzvzuatftmnfarw';           // ✅ your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('bidhanbhattacharya2711@gmail.com', 'NexaHomes');
        $mail->addAddress('bidhanbhattacharyadeepika@gmail.com');

        $mail->Subject = "📩 New Loan Enquiry - $name";
        $mail->Body    = $message;
        if ($mail->send()) {
            file_put_contents('email_log.log', "Email sent successfully to $email\n", FILE_APPEND);
        } else {
            file_put_contents('email_error.log', "Email Error: " . $mail->ErrorInfo . "\n", FILE_APPEND);
        }
    } catch (Exception $e) {
        file_put_contents('mail_error.log', "Mailer Error: {$mail->ErrorInfo}\n", FILE_APPEND);
    }

    // Redirect to Thank You page
    header("Location: Loanthankyou.php?name=" . urlencode($name));
    exit();
} else {
    echo "Invalid request.";
}
?>
