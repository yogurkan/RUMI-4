<?php
// Connect to the database
include("dbconnect.php");

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Get all the members
$stmt = $conn->prepare('SELECT member_mail FROM members WHERE member_id != 1');
$stmt->execute();
$result = $stmt->get_result();

// Fetch the members as an associative array
$members = $result->fetch_all(MYSQLI_ASSOC);

// Close the connection
$conn->close();

// Send an email to each member
foreach ($members as $member) {
    $to = $member['member_mail'];
    $subject = 'New AidConnect Events';
    $message = 'Hello, we are AidConnect. We are organizing new events. Please check our website for more information.';
    $headers = 'From: noreply@aidconnect.com';

    mail($to, $subject, $message, $headers);
}

// Redirect back to the previous page
header('Location: operations.php');
