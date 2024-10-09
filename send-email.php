<?php
include('./db_config/config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("../PHPMailer/PHPMailer.php");
require("../PHPMailer/SMTP.php");
require("../PHPMailer/Exception.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Decode the JSON data
    $regData = json_decode(file_get_contents('php://input'), true);
    
    $name = $regData['name'] ?? '';
    $email = $regData['email'] ?? '';
    $phone = $regData['phone'] ?? '';
    $message = $regData['message'] ?? '';

    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo 'false';
        exit;
    }

    try {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'naveenproton@gmail.com'; // Your email address
        $mail->Password = 'rull sjjz aalq vduy'; // Your email password or app-specific password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Email setup
        $mail->setFrom($email, 'Website Contact');
        $mail->addAddress('naveenproton@gmail.com' ); // Send to the user email
        
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Customer Feedback';
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        // Send email and insert data into the database
        if ($mail->send()) {
            // Insert the form data into the database
            $sql = "INSERT INTO contact_form (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
            if (mysqli_query($conn, $sql)) {
                echo 'true'; // Success
            } else {
                echo 'false'; // Database error
            }
        } else {
            echo 'false'; // Email error
        }
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}"; // PHPMailer error
    }
}
?>
