<?php
include("dbconnect.php");

if (isset($_POST['donation_id'])) {
    $donation_id = $_POST['donation_id'];

    // Assuming $conn is your database connection
    $query = "UPDATE donations SET isShipped = 'No' WHERE donation_id = $donation_id";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 1;
    } else {
        // Log the error
        error_log("Update failed: " . mysqli_error($conn));
        echo 0;
    }
}
