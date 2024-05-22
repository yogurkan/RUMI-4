<?php
define('dbusername', "root");   //Enter your database username
define('dbpassword', "root");   //Enter your database password
define('dbdatabase', "db_ngo");   //Enter your database name
define('dbserver', "localhost");     //Enter your database server





$conn = new mysqli(dbserver, dbusername, dbpassword, dbdatabase);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}
