<?php
session_start();
include("dbconnect.php");

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$query = $conn->prepare("SELECT member_id, member_password, is_admin FROM members WHERE member_mail = ?");
$query->bind_param("s", $email);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['member_password'])) { // Verify the password
            $_SESSION['member_id'] = $row['member_id']; // Store the customerId in a session variable
            if ((int)$row['is_admin'] === 1) { // Check if the user is an admin
                header("refresh:0;url=operations.php");
            } else {
                // header("refresh:3;url=index2.php");
                echo '<!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="refresh" content="3; url = indexmember.php" name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Logged In</title>
                    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
                    <link rel="icon" href="img/aidlogo.png" />

                </head>

                <body class="flex items-center justify-center h-screen bg-gray-100">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold mb-4">You succesfully logged in. You will be directed to home in 3 seconds!</h1>
                    </div>
                </body>

                </html>';
            }
            exit;
        } else {
            echo "<script>alert('Invalid email or password'); window.location.href = 'login.html';</script>";
        }
    }
} else {
    echo "<script>alert('Email not found'); window.location.href = 'login.html';</script>";
}

$query->close();
$conn->close();
