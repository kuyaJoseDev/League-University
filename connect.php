<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "league_university_login"; // Make sure this matches your phpMyAdmin database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
