<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <!-- Add Bootstrap CSS (Place this before your custom CSS) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link your custom CSS file -->
    <link rel="stylesheet" type="text/css" href="../assets/admin_dashboard.css">

</head>
<body>
    <div class="container">
        <h1>User List</h1>

        <!-- Search Bar -->
        <div class="input-group">
        <input type="text" class="form-control" id="search" placeholder="Search by name" onkeydown="handleEnterKey(event)">
 <div class="input-group-append">
                <button class="btn btn-primary" type="button" onclick="searchStudents()">Search</button>
            </div>
        </div>

        <!-- User List Table -->
        <?php
        // Include the database configuration file
        include("./../config/database.php");

        // Fetch the list of users from the database
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Email</th>';
            echo '<th>LinkedIn Link</th>';
            echo '<th>Skills</th>';
            echo '<th>Interests</th>';
            echo '<th>Current Job</th>';
            echo '<th>Domain</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td><a href="../common/user_profile.php?id=' . $row['id'] . '">' . $row['name'] . '</a></td>';
                echo '<td> <a href="mailto:' . $row['email'] . '">'. $row['email'] .'</a></td>';
                echo '<td><a href="' . $row['linkedin_link'] . '">Linked in: <br>'. $row['name'].'<a></td>';
                echo '<td>' . $row['skills'] . '</td>';
                echo '<td>' . $row['interests'] . '</td>';
                echo '<td>' . $row['current_job_company'] . '</td>';
                echo '<td>' . $row['domain_of_work'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No users found.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <!-- Add Bootstrap JavaScript (Place this before your custom JavaScript) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Add this JavaScript code in the <head> section of your HTML -->
<script src="./../assets/js/autosuggest.js"></script>

</body>
</html>
