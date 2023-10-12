<?php
// includes/database.php

$host = "localhost";
$username = "root";
$password = "";
$database = "ict portal";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// function getBlogPosts() {
//     global $conn;
//     $sql = "SELECT * FROM posts";
//     $result = $conn->query($sql);
    
//     if ($result->num_rows > 0) {
//         return $result->fetch_all(MYSQLI_ASSOC);
//     } else {
//         return [];
//     }
// }
// ?>
