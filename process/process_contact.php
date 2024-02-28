<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require '../vendor/autoload.php';

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'beprofessional');

if (mysqli_connect_errno()) {
    die("Connect failed: " . mysqli_connect_error());
}

// Assuming your form data is sent using POST method
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Your email body content
$emailBody = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Be Professional - Contact Form-Query</title>
    <!-- Your inline styles here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        .success {
            color: #FC6107;
            margin: 10px 0;
            font-size: 24px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #fff;
            padding: 5px;
            text-align: left;
        }

        th {
            width: 5%;
        }

        td {
            width: 95%;
        }

        .msg {
            vertical-align: top;
            height: 10vh;
        }
    </style>
</head>
<body>
    <!-- Your HTML body content here, using the variables like $name, $email, etc. -->
    <div class='container'>
        <p class='success'>Client Information</p>
        <table>
            <tr>
                <th>Name</th>
                <td>:- $name</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:- $email</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>:- $mobile</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>:- $subject</td>
            </tr>
            <tr class='msg'>
                <th>Message</th>
                <td>:- $message</td>
            </tr>
        </table>
    </div>
</body>
</html>
";

// Perform database insert with prepared statement
$sql = "INSERT INTO contact_info (name, email, mobile, subject, message) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $mobile, $subject, $message);

$response = array(); // Initialize response array

if ($stmt->execute()) {
    // Database insert successful

    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Disable debug output
        $mail->isSMTP();
        $mail->Host = 'send.one.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'join@beprofessional.in';
        $mail->Password = 'join#@$354';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('join@beprofessional.in');
        $mail->addAddress('website@beprofessional.in');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Be Professional - Contact Form-Query';
        $mail->Body = $emailBody;

        $mail->send();

        // Data inserted and email sent successfully
        $response = array("success" => true, "message" => "Thanks for Your Message!");
    } catch (Exception $e) {
        $response = array("success" => false, "message" => "Sorry, we couldn't send the email. Please try again later. If the problem persists, contact support. Error: " . $mail->ErrorInfo);
    }
} else {
    // Error in database operation
    $response = array("success" => false, "message" => "Error: " . $stmt->error);
}

// Close the database connection
$stmt->close();
$conn->close();

// Return the response in JSON format
header('Content-Type: application/json');
echo json_encode($response);
