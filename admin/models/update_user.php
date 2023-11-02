<?php
// // session_start();
// include('./../../config/database.php'); // Include the common database connection file


// if (isset($_POST['jobTitle'])) {
//     $job_title = $_POST['jobTitle'];
// } else {
//     // Handle the case where 'jobTitle' is not set
//     echo "Error: jobTitle is not set in the form data.<br>";
// exit (0);


// }

// if (isset($_POST['userId'])) {
//     $user_id = $_POST['userId'];
// } else {
//     // Handle the case where 'userId' is not set
//     echo "Error: userId is not set in the form data.<br>";
// exit (0);

// }


// echo "Received jobTitle: " . $jobTitle . " and userId: " . $userId;

// if (isset($_POST['jobTitle']) && isset($userId)) {
//         $jobTitle = $_POST['jobTitle'];
//     $userId = $_POST['userId']; // Retrieve userId from POST data

//     // Update the database using prepared statements
//     $updateQuery = "UPDATE students SET domain_of_work = ? WHERE id = ?";
//     $stmt = $conn->prepare($updateQuery);
//     $stmt->bind_param("si", $jobTitle, $userId);

//     if ($stmt->execute()) {
//         echo "Work information updated successfully!";
//     } else {
//         echo "Error updating work information: " . $stmt->error;
//     }

//     // Close the database connection
//     $stmt->close();
//     $conn->close();
// } else {
//     echo "jobTitle or userId is not set in the POST data.";
// }

?>

<?php
// include('./../../config/database.php'); // Include the common database connection file


// if (isset($_POST['jobTitle']) && isset($_POST['userId'])) {
//     $jobTitle = $_POST['jobTitle'];
//     $userId = $_POST['userId'];

//     $updateQuery = "UPDATE students SET domain_of_work = '$jobTitle' WHERE id = '$userId'";

//     if (mysqli_query($conn, $updateQuery)) {
//         echo "Work information updated successfully!";
//     } else {
//         echo "Error updating work information: " . mysqli_error($conn);
//     }

//     // Close the database connection
//     mysqli_close($conn);
// }
//  else {
//     echo "jobTitle or userId is not set in the POST data.";
// }
?>


<?php
include('./../../config/database.php'); // Include the common database connection file

if (isset($_POST['jobTitle']) && isset($_POST['userId'])) {
    $jobTitle = $_POST['jobTitle'];
    $userId = $_POST['userId']; // Retrieve userId from POST data

    // Update the database using prepared statements
    $updateQuery = "UPDATE students SET domain_of_work = ? WHERE id = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("si", $jobTitle, $userId);

    if ($stmt->execute()) {
        echo "Work information updated successfully!";
    } else {
        echo "Error updating work information: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    echo "jobTitle or userId is not set in the POST data.";
}
?>



