<?php
include("../../config/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $linkedin_link = $_POST["linkedin_link"];
    $skills = $_POST["skills"];
    $interests = $_POST["interests"];
    $current_job_company = $_POST["current_job_company"];
    $domain_of_work = $_POST["domain_of_work"];

    // Insert data into the "students" table
    $sql = "INSERT INTO students (name, email, linkedin_link, skills, interests, current_job_company, domain_of_work)
            VALUES ('$name', '$email', '$linkedin_link', '$skills', '$interests', '$current_job_company', '$domain_of_work')";

    if ($conn->query($sql) === TRUE) {
        // JavaScript code for the pop-up and redirection
        echo '<script>';
        echo 'alert("Student profile created successfully");';
        echo 'window.location.href = "./../dashboard.php";';
        echo '</script>';

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
