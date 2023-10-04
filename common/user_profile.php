<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <!-- Include Bootstrap CSS (Place this before your custom CSS) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include your custom CSS file -->
    <link rel="stylesheet" type="text/css" href="assets/css/user_profile.css">
</head>
<body>

<div class="container mt-5">
    <?php
    // Check if an ID is provided in the URL
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];

        // Include the database configuration file
        include("../config/database.php");

        // Fetch user data from the database
        $sql = "SELECT * FROM students WHERE id = $userId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            echo '<h1 class="display-4">' . $user['name'] . '</h1>';
            // Display user profile picture (replace 'profile_pic' with your actual column name)
            echo '<img src="' . $user['profile_pic'] . '" alt="Profile Picture" class="img-thumbnail" width="150" height="150"><br>';

            // Display user details section
            echo '<h2 class="mt-4">Student Details</h2>';
            echo '<div class="section-underline"></div>';
            echo '<p><strong>Name:</strong> ' . $user['name'] . '</p>';
            echo '<p><strong>Email:</strong> ' . $user['email'] . '</p>';
            echo '<p><strong>LinkedIn Link:</strong> ' . $user['linkedin_link'] . '</p>';

            // Display education section
            echo '<h2 class="mt-4">Education</h2>';
            echo '<div class="section-underline"></div>';
            // Add education details here

            // Display job-related information section
            echo '<h2 class="mt-4">Job-Related Information</h2>';
            echo '<div class="section-underline"></div>';
            echo '<p><strong>Current Job:</strong> ' . $user['current_job'] . '</p>';
            echo '<p><strong>Domain of Work:</strong> ' . $user['domain'] . '</p>';

            // Display extra interests section
            echo '<h2 class="mt-4">Extra Interests</h2>';
            echo '<div class="section-underline"></div>';
            echo '<p><strong>Skills:</strong> ' . $user['skills'] . '</p>';
            echo '<p><strong>Interests:</strong> ' . $user['interests'] . '</p>';
        } else {
            echo '<p class="lead">User not found.</p>';
        }

        // Close the database connection
        $conn->close();
    } else {
        // Handle the case where no ID is provided (e.g., display an error message)
        echo '<p class="lead">User not found.</p>';
    }
    ?>
</div>

<!-- Include Bootstrap JavaScript (Place this before your custom JavaScript) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
