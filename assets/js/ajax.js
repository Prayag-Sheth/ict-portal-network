// // update_profile.js
// $("#work-edit-form-save").click(function() {
//     // Get the job title from the input field
//     var jobTitle = $("#job").val();
//     console.log("jobTitle: " + jobTitle);
//     console.log("userId: " + userId);
    
//     // Send a POST request with both jobTitle and userId
//     $.ajax({
//         type: "POST",
//         url: "../../admin/models/update_user.php",
//         data: {
//             jobTitle: jobTitle,
//             userId: userId, 
//             // cache: false
//         },
//         contentType: "application/x-www-form-urlencoded; charset=UTF-8",
//         // contentType: "application/json",
//         success: function(response) {
//             // Handle the response from the server (e.g., show a success message)
//             alert("Work information updated successfully!");
//             console.log("Sending data to update_user.php:", jobTitle, userId);

//         },
//         error: function(error) {
//             // Handle any errors (e.g., show an error message)
//             alert("Error updating work information.");
//         }
//     });

//    // Update the "Work" information in the readonly field
//    $("#work").val(jobTitle);
  
//    // Hide the edit form and show the updated "Work" information
//    $("#work-edit-form").addClass("d-none");
//    $("#work").removeClass("d-none");

// });



$("#work-edit-form-save").click(function() {

    
    // Get the job title from the input field
    var jobTitle = $("#job").val();
    console.log("jobTitle: " + jobTitle);
    console.log("userId: " + userId);
    
    // Send a POST request with both jobTitle and userId
    $.ajax({
        type: "POST",
        url: "../../admin/models/update_user.php",
        data: {

            jobTitle: jobTitle,
            userId: userId,
        },
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(response) {
            console.log("Sending data to update_user.php:", jobTitle, userId);
            alert("Work information updated successfully!");
               // Update the "Work" information in the readonly field
   $("#work").val(jobTitle);
  
   // Hide the edit form and show the updated "Work" information
   $("#work-edit-form").addClass("d-none");
   $("#work").removeClass("d-none");
        },
        error: function(xhr, status, error) {
            console.log("Error sending data to update_user.php:", error);
            alert("Error updating work information.");
        }
    });
    
});
