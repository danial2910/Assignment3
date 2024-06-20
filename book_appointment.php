<?php
// book_appointment.php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$counselor = $_POST['counselor'];
$appointmentDate = $_POST['appointmentDate'];
$appointmentTime = $_POST['appointmentTime'];
$studentName = $_POST['studentname'];
$studentEmail = $_POST['studentEmail'];

// Insert data into database
$sql = "INSERT INTO appointments (counselor, appointment_date, appointment_time, student_name, student_email) VALUES ('$counselor', '$appointmentDate', '$appointmentTime', '$studentName', '$studentEmail')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
