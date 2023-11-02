<?php
// $output = shell_exec('python3 common/assets/python_script/profile_fetch.py');
// $data = json_decode($output, true);

// if (empty($data)) {
//     echo "Error: No data received from the Python script.";
// } else {
//     // Check if specific keys exist before accessing them
//     if (isset($data['full_name'])) {
//         echo "Full Name: " . $data['full_name'];
//     } else {
//         echo "Full Name not found in the data.";
//     }

//     if (isset($data['headline'])) {
//         echo "Headline: " . $data['headline'];
//     } else {
//         echo "Headline not found in the data.";
//     }

//     if (isset($data['location'])) {
//         echo "Location: " . $data['location'];
//     } else {
//         echo "Location not found in the data.";
//     }

//     // Add more fields as needed
// }
?>



<?php
// $api_endpoint = 'https://nubela.co/proxycurl/api/v2/linkedin';
// $linkedin_profile_url = 'https://www.linkedin.com/in/krunaltrivedi2601';
// $api_key = 'a7aT5GPt_jw5kDRMtZkLog'; // Removed extra characters

// $ch = curl_init($api_endpoint . '?url=' . $linkedin_profile_url . '&skills=include');
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $api_key));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $response = curl_exec($ch);

// if ($response) {
//     $profile_data = json_decode($response, true);
//     echo "Full Name: " . $profile_data['full_name'];
// } else {
//     echo "cURL request failed.";
// }

// curl_close($ch);
?>



<!DOCTYPE html>
<html>

<head>
    <title>User Profile</title>
    <!-- Include Bootstrap CSS (Place this before your custom CSS) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Include your custom CSS file -->
    <link rel="stylesheet" type="text/css" href="../assets/css/user_profile.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
</head>

<style></style>

<body>

    <div class="container mt-5 ">
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
                // Display user details section
                echo '<div class="row ">';
                echo '<div class="container">';

                echo '<div class="row ">';

                echo '<div class="col-md-2 ">';
                echo '</div>';

                //left div

// $output = shell_exec('common/assets/python_script/profile_fetch.py');
// echo "Full Name: " . $output;

                echo '<div class="col-md-5 border grid gap-0 column-gap-3 ">';
                echo '<h1 class="display-4 row" style=padding: 0px; margin: 0px;>' . $user['name'] . '</h1>';
                // echo '<h1 class="display-4 row" style=padding: 0px; margin: 0px;>' . $output . '</h1>';
                // Display current job company
                if (!empty($user['current_job_company'])) {
                    echo '<p>' . $user['current_job_company'] . '</span></p>';
                }

                if (!empty($user['domain_of_work'])) {
                    // echo '<h2 class="mt-6 ">Experience</h2>';
                    echo '<div class="section-underline"></div>';
                    if (!empty($user['skills'])) {
                        echo '<p>' . $user['domain_of_work'] . '</span></p>';
                    }
                }

                // Display user profile picture (replace 'profile_pic' with your actual column name)
                // echo '<img src="' . $user['profile_pic'] . '" alt="Profile Picture" class="img-thumbnail" width="150" height="150"><br>';


                // Check if the fields are available in the database before displaying them
                if (!empty($user['schools']) || !empty($user['universities'])) {
                    echo '<div class="card">';

                    echo '<h2 class="mt-6">Education</h2>';
                    echo '<div class="section-underline"></div>';
                    if (!empty($user['schools'])) {
                        echo '<p><strong>Schools:</strong> <span id="schools"> <br>' . $user['schools'] . '</span></p>';
                    }
                    if (!empty($user['universities'])) {
                        echo '<p class=""><strong>Universities:</strong> <span id="universities"> <br>' . $user['universities'] . '</span></p>';
                    }
                    echo '</div>';
                }

                // Check if Internships or Jobs are available, and only display the respective sections if they have data
                if (!empty($user['internships']) || !empty($user['jobs'])) {
                    echo '<div class="card">';

                    echo '<h2 class="mt-6 ">Experience</h2>';
                    echo '<div class="section-underline"></div>';
                    if (!empty($user['internships'])) {
                        echo '<p><strong>Internships:</strong> <span id="internships"> <br>' . $user['internships'] . '</span></p>';
                    }
                    if (!empty($user['jobs'])) {
                        echo '<p><strong>Jobs:</strong> <span id="jobs"> <br>' . $user['jobs'] . '</span></p>';
                    }
                    echo '</div>';
                }

                if (!empty($user['skills'])) {
                    echo '<div class="card">';

                    echo '<h2 class="mt-6 ">Experience</h2>';
                    echo '<div class="section-underline"></div>';
                    if (!empty($user['skills'])) {
                        echo '<p><strong>Internships:</strong> <span id="skills"> <br>' . $user['skills'] . '</span></p>';
                        echo '</div';
                    }
                }

                if (!empty($user['intrests'])) {
                    echo '<div class="card">';
                    echo '<h2 class="mt-6 ">Experience</h2>';
                    echo '<div class="section-underline"></div>';
                    if (!empty($user['intrests'])) {
                        echo '<p><strong>Internships:</strong> <span id="intrests"> <br>' . $user['intrests'] . '</span></p>';
                    }
                    echo '<div class="card">';
                }

                // Update button
                echo '<button type="button" id="updateButton" class="btn btn-success mt-3">Update</button>';
                echo '</form>';
                echo '</div>'; //Clsoing left div



                echo '</div>';

                //right div




                // Edit and Delete buttons
                echo '<div class="col-md-3 text-right ">';

                // echo '<a href="#" class="btn btn-primary mt-4" id="editButton">Edit</a>';
                echo '  <button type="button" class="btn" id="editButton" onclick="toggleEditMode()"><i class="bi bi-pencil-square"></i> Edit</button>';

                // Trigger the delete confirmation modal
                echo '<button class="btn" onclick="document.getElementById(\'deleteModal\').style.display=\'block\'"><i class="bi bi-trash-fill"></i>DELETE</button>';

                $imageSrc = !empty($user['profile_pic']) ? $user['profile_pic'] : './assets/images/user_profile.png';

                echo '
                    <div class=" .float-ritght" >
                        <div class="profil ">
                            <div class="kapak"></div>

                          <img class="devrim" src="' . $imageSrc . '" alt="Profile Picture" class="img-thumbnail" ><br>
    
                            <a class="isim">' . $user['name'] . '</a>
                            <p class="turkej">' . $user['location'] . '</p>
                            

                            <div class="iletisim">
                                <a target="_blank" href="' . $user['linkedin_link'] . '/"><img draggable="false" class="sayfalar" src="https://cdn4.iconfinder.com/data/icons/social-icons-16/512/LinkedIn-128.png"></a>
                                
                                <a target="_blank" href="https://www.blogger.com/profile/00840795839948641627"><img draggable="false" class="sayfalar" src="https://cdn4.iconfinder.com/data/icons/social-icons-16/512/Blogger-128.png"></a>
                                
                                <a target="_blank" href="https://www.facebook.com/devrimos"><img draggable="false" class="sayfalar" src="https://cdn4.iconfinder.com/data/icons/icon-flat-icon-set/50/social-facebook-128.png"></a>
                                
                                <a target="_blank" href="https://www.instagram.com/devrim0s"><img draggable="false" class="sayfalar" src="https://cdn4.iconfinder.com/data/icons/icon-flat-icon-set/50/social-instagram-128.png"></a>
                                
                                <a target="_blank" href="https://www.twitter.com/devrim0s"><img draggable="false" class="sayfalar" src="https://cdn4.iconfinder.com/data/icons/icon-flat-icon-set/50/social-twitter-128.png"></a>
                                </div>
                            </div>
                        </div>

                        
                        ';


                echo '</div>';

                echo '</div>'; //buttons


                // echo '<div class="">'; // (User details)
                // echo '<h2 class="mt-4 card">Student Details</h2>';
                // echo '<div class="section-underline"></div>';
                // echo '<form id="profileForm" action="update.php?id=' . $userId . '" method="post">';
                // echo '<p><strong>Name:</strong> <span id="name">' . $user['name'] . '</span></p>';
                // echo '<p><strong>Email:</strong> <span id="email">' . $user['email'] . '</span></p>';
                // echo '<p><strong>LinkedIn Link:</strong> <span id="linkedin_link">' . $user['linkedin_link'] . '</span></p>';
                // echo ' </div>'; //(User details)



                echo '</div>'; //right div


                echo '</div>'; // Close row



                echo '</div>';
            } // if ($result->num_rows > 0) 

            else {
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

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal">
        <span onclick="document.getElementById('deleteModal').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="/action_page.php">
            <div id="del_container">
                <h1>Delete Account</h1>
                <p>Are you sure you want to delete your account?</p>
                <div class="clearfix">
                    <button type="button" class="cancelbtn" onclick="document.getElementById('deleteModal').style.display='none'">Cancel</button>
                    <!-- Add your delete logic to the "Delete" button below -->
                    <button type="button" class="deletebtn" onclick="confirmDelete()">Delete</button>
                </div>
            </div>
        </form>
    </div>




    <!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <form id="profileForm" action="update.php?id=<?php echo $userId; ?>" method="post">
            <div class="row">
                <!-- Left Column: User Details -->
                <div class="col-md-5 border grid gap-0 column-gap-3">
                    <h1 class="display-4 row" style="padding: 0px; margin: 0px;">
                        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" disabled>
                    </h1>

                    <!-- Display other user details as input fields, e.g., current_job_company, domain_of_work, etc. -->
                    <!-- Example: -->
                    <p>
                        <input type="text" name="current_job_company" value="<?php echo $user['current_job_company']; ?>" disabled>
                    </p>

                    <!-- Add more input fields for other user details as needed -->
                    <!-- Example: -->
                    <p>
                        <input type="text" name="domain_of_work" value="<?php echo $user['domain_of_work']; ?>" disabled>
                    </p>
                </div>

                <!-- Right Column: Profile Picture and Buttons -->
                <div class="col-md-3 text-right">
                    <button type="button" class="btn" id="editButton" onclick="toggleEditMode()">Edit</button>
                    <button type="button" class="btn" id="cancelButton" style="display: none;" onclick="cancelEditMode()">Cancel</button>
                    <button type="button" class="btn btn-success" id="updateButton" style="display: none;" onclick="saveUpdates()">Save</button>

                    <!-- Rest of your right column content -->
                </div>
            </div>
        </form>

        <!-- Delete Confirmation Modal and other content -->
        <!-- Your modals and other content here -->

    </div>

    <script>
        function toggleEditMode() {
            var formFields = document.querySelectorAll("#profileForm input");
            var editButton = document.getElementById("editButton");
            var updateButton = document.getElementById("updateButton");
            var cancelButton = document.getElementById("cancelButton");

            formFields.forEach(function (field) {
                field.disabled = !field.disabled;
            });

            editButton.style.display = "none";
            updateButton.style.display = "block";
            cancelButton.style.display = "block";
        }

        function cancelEditMode() {
            var formFields = document.querySelectorAll("#profileForm input");
            var editButton = document.getElementById("editButton");
            var updateButton = document.getElementById("updateButton");
            var cancelButton = document.getElementById("cancelButton");

            formFields.forEach(function (field) {
                field.disabled = true;
            });

            editButton.style.display = "block";
            updateButton.style.display = "none";
            cancelButton.style.display = "none";
        }

        function saveUpdates() {
            if (confirm("Are you sure you want to save these updates?")) {
                document.getElementById("profileForm").submit();
            }
        }
    </script>
    <!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->



    <!-- Include Bootstrap JavaScript (Place this before your custom JavaScript) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to toggle between read-only and editable modes
        function toggleEditMode() {
            // Enable or disable form fields based on the edit mode
            var formFields = document.querySelectorAll("#profileForm input, #profileForm textarea");
            var editButton = document.getElementById("editButton");
            var updateButton = document.getElementById("updateButton");

            formFields.forEach(function(field) {
                field.disabled = !field.disabled;
            });

            editButton.style.display = "none";
            updateButton.style.display = "block";
        }

        // Function to confirm deletion
        function confirmDelete() {
            if (confirm("Are you sure you want to delete this student profile?")) {
                // Add your delete logic here, e.g., redirect to delete.php
                window.location.href = "./../admin/views/delete.php?id=<?php echo $userId; ?>";
            }
        }

        // Add an event listener to the edit button
        document.getElementById("editButton").addEventListener("click", toggleEditMode);

        // Add an event listener to the update button
        document.getElementById("updateButton").addEventListener("click", function() {
            if (confirm("Are you sure you want to update this student profile?")) {
                document.getElementById("profileForm").submit();
            }
        });
    </script>

    <!-- Include Bootstrap JavaScript (Place this before your custom JavaScript) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to toggle between read-only and editable modes
        function toggleEditMode() {
            // Enable or disable form fields based on the edit mode
            var formFields = document.querySelectorAll("#profileForm input, #profileForm textarea");
            var editButton = document.getElementById("editButton");
            var updateButton = document.getElementById("updateButton");
            var cancelButton = document.getElementById("cancelButton");

            formFields.forEach(function(field) {
                field.disabled = !field.disabled;
            });

            editButton.style.display = "none";
            updateButton.style.display = "block";
            cancelButton.style.display = "block";
        }

        // Function to cancel the edit mode and revert to read-only
        function cancelEditMode() {
            var formFields = document.querySelectorAll("#profileForm input, #profileForm textarea");
            var editButton = document.getElementById("editButton");
            var updateButton = document.getElementById("updateButton");
            var cancelButton = document.getElementById("cancelButton");

            formFields.forEach(function(field) {
                field.disabled = true;
            });

            editButton.style.display = "block";
            updateButton.style.display = "none";
            cancelButton.style.display = "none";
        }

        // Function to save updates to the database
        function saveUpdates() {
            if (confirm("Are you sure you want to save these updates?")) {
                // You can add your logic to save updates to the database here

                // After saving updates, cancel the edit mode
                cancelEditMode();
            }
        }

        // Add an event listener to the edit button
        document.getElementById("editButton").addEventListener("click", toggleEditMode);

        // Add an event listener to the cancel button
        document.getElementById("cancelButton").addEventListener("click", cancelEditMode);

        // Add an event listener to the update button
        document.getElementById("updateButton").addEventListener("click", saveUpdates);
    </script>


</body>

</html>