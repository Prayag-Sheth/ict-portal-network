<!DOCTYPE html>
<html>
<head>
    <title>Create Student Profile</title>
    <!-- Add Bootstrap CSS (Place this before your custom CSS) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link your custom CSS file -->
    <link rel="stylesheet" type="text/css" href="your-custom.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Create Student Profile</h1>

        <form action="add_student.php" method="post" onsubmit="return confirmAddUser()" class="mt-4">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="linkedin_link">LinkedIn Profile:</label>
                <input type="url" name="linkedin_link" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea name="skills" rows="4" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="interests">Interests:</label>
                <textarea name="interests" rows="4" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="current_job_company">Current Job/Company:</label>
                <input type="text" name="current_job_company" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="domain_of_work">Domain of Work:</label>
                <input type="text" name="domain_of_work" class="form-control" required>
            </div>

            <!-- New Fields -->
            <div class="form-group">
                <label for="schools">Schools:</label>
                <input type="text" name="schools" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="universities">Universities:</label>
                <input type="text" name="universities" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="internship">Internship:</label>
                <input type="text" name="internship" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jobs">Jobs:</label>
                <input type="text" name="jobs" class="form-control" required>
            </div>
            
            <!-- End of New Fields -->

            <button type="submit" class="btn btn-primary">Create Profile</button>
        </form>

        <a href="./../dashboard.php" class="mt-4">Back to Dashboard</a>
    </div>

    <!-- Add Bootstrap JavaScript (Place this before your custom JavaScript) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function confirmAddUser() {
            var confirmation = confirm("Are you sure you want to add this student profile?");
            if (confirmation) {
                return true; // Continue with form submission
            } else {
                return false; // Cancel form submission
            }
        }
    </script>
</body>
</html>
