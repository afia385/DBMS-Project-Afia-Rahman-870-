<?php
$host = "localhost";
$user = "root"; // Change if necessary
$pass = ""; // Change if necessary
$dbname = "afia";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
