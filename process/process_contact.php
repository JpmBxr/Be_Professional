<?php

$servername = "localhost";

$username = "root";

$password = "";



// Create connection

$conn = mysqli_connect($servername, $username, $password, 'sampledb');



if (mysqli_connect_errno()) {

    printf("Connect failed: %s\n", mysqli_connect_error());

    exit();

}

// Assuming your form data is sent using POST method
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Perform database insert or any other processing as needed
// For example, let's assume a simple insert query
$sql = "INSERT INTO contact_info (name, email, mobile, subject, message) VALUES ('$name', '$email', '$mobileno', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully
    $response = array("success" => true, "message" => "Message sent successfully!");
} else {
    // Error in database operation
    $response = array("success" => false, "message" => "Error: " . $conn->error);
}

// Close the database connection
$conn->close();

// Return the response in JSON format
header('Content-Type: application/json');
echo json_encode($response);

?>