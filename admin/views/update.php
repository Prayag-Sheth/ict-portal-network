<!-- admin/views/edit.php -->

<?php
include("../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $linkedin_link = $_POST["linkedin_link"];
    $skills = $_POST["skills"];
    $interests = $_POST["interests"];
    $current_job_company = $_POST["current_job_company"];
    $domain_of_work = $_POST["domain_of_work"];

    // Update data in the "students" table
    $sql = "UPDATE students SET
            name = '$name',
            email = '$email',
            linkedin_link = '$linkedin_link',
            skills = '$skills',
            interests = '$interests',
            current_job_company = '$current_job_company',
            domain_of_work = '$domain_of_work'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Student record updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch the student record to edit
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>