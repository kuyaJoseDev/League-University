<?php
// ================= Database Configuration =================
$host     = "localhost";        // usually localhost
$username = "root";             // your DB username
$password = "";                 // your DB password
$database = "shoppinpay";    // your database name

// ================= Create Connection =================
$conn = new mysqli($host, $username, $password, $database);

// ================= Check Connection =================
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set charset for proper UTF-8 support
$conn->set_charset("utf8mb4");
?>
