<?php
require_once 'db.php'; // Adjust the path if necessary

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>