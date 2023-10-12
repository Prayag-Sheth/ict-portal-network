<?php
include("../../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $studentId = $_GET["id"];

    // SQL query to delete the student record
    $sql = "DELETE FROM students WHERE id = $studentId";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student profile deleted successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Redirect back to the dashboard after deleting or if there was an error
echo "<script>window.location.href = './../dashboard.php';</script>";

$conn->close();
?>
