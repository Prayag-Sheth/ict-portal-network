<!DOCTYPE html>
<html>
<head>
    <title>Create Student Profile</title>
    <!-- Add Bootstrap CSS (Place this before your custom CSS) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Create Student Profile</h1>

        <form action="add_student.php" method="post" onsubmit="return confirmAddUser()" class="mt-4">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

                     
            <div class="form-group">
            <label for="linkedin_link">LinkedIn Profile:</label>
           
            <input type="text" id="linkedin_link" class="form-control" required>
          </div>
           <button type="button" id="fetch-button" class="btn btn-primary">Fextch LinkedIn Data</button>

          
            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea name="skills" id="skills" rows="4" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="interests">Interests:</label>
                <textarea name="interests" id = "interests" rows="4" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="current_job_company">Current Job/Company:</label>
                <input type="text" name="current_job_company" id="current_job_company" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="domain_of_work">Domain of Work:</label>
                <input type="text" name="domain_of_work" id="domain_of_work" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="schools">Schools:</label>
                <input type="text" name="schools" id="schools" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="universities">Universities:</label>
                <input type="text" name="universities" id="universities" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="internship">Internship:</label>
                <input type="text" name="internship" id="internship" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jobs">Jobs:</label>
                <input type="text" name="jobs" id="jobs" class="form-control" required>
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


// JavaScript code
$(document).ready(function() {
  // Add a submit event listener to the input field
  $("#fetch-button").click(function() {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the link from the input field
    var link = $("#linkedin_link").val();
    
    // Make an Ajax request to the Python script route
    $.ajax({
      type: "GET",
      url: "http://localhost:8000/my-first-api?link="+link,
      data: {
        link: link
      },
      success: function(response) {
        // Parse the JSON response
        // var profile_data = JSON.parse(response);

        if(response.experiences.length > 0){
            $("#current_job_company").val(response.experiences[0]['company']);
            var company_name_list = []
            for(i=0;i<response.experiences.length; i++){
                company_name_list.push(response.experiences[i]['company'])
            }
            $("#jobs").val(company_name_list.join(", "))
        }
        if(response.interests.length > 0){
            $("#interests").val(response.interests[0]);
        }
        if(response.education.length > 0){
            $("#schools").val(response.education[0]['school']);
            $("#universities").val(response.education[0]['school']);
        }
        $("#name").val(response.full_name);
        $("#domain_of_work").val(response.occupation)
        // Do something with the profile data
      },
      error: function(xhr, status, error) {
        debugger;
        // Handle the error
        alert("Error fetching LinkedIn data.");
      }
    });
  });
});

    </script>
</body>
</html>
