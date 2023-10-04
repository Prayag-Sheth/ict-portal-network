<!DOCTYPE html>
<html>
<head>
    <title>Create Student Profile</title>
</head>
<body>
    <h1>Create Student Profile</h1>
    
    <form action="add_student.php" method="post" onsubmit="return confirmAddUser()">

        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="linkedin_link">LinkedIn Profile:</label>
        <input type="url" name="linkedin_link" required><br><br>
        
        <label for="skills">Skills:</label>
        <textarea name="skills" rows="4" required></textarea><br><br>
        
        <label for="interests">Interests:</label>
        <textarea name="interests" rows="4" required></textarea><br><br>
        
        <label for="current_job_company">Current Job/Company:</label>
        <input type="text" name="current_job_company" required><br><br>
        
        <label for="domain_of_work">Domain of Work:</label>
        <input type="text" name="domain_of_work" required><br><br>
        
        <button type="submit">Create Profile</button>
    </form>
    
    <a href="./../dashboard.php">Back to Dashboard</a>
</body>

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

</html>
