<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Execute the Python script and capture its output
    $python_output = shell_exec('python  ../../assets/python/fetch_linkedin_data.py');

$python_script_url = '../../assets/python/fetch_linkedin_data.py';
$python_data = file_get_contents($python_script_url);

// If you have your dummy data in the Python script, you can decode it as JSON
$profile_data = json_decode($python_data, true);



// // Now you have the profile data in $profile_data, and you can use it as needed
// // For example, you can return it as a JSON response
// header('Content-Type: application/json');
// echo json_encode($profile_data);

//     // Check if the Python script execution was successful
//     if ($python_output !== null) {
//         // Assuming $python_output contains valid JSON data
//         $data = json_decode($python_output, true);

//         // Prepare the response
//         $response = array(
//             "success" => true,
//             "full_name" => $data['full_name'],
//             "skills" => $data['skills']
//         );
//     } else {
//         // If there was an error executing the Python script
//         $response = array(
//             "success" => false,
//             "message" => "Failed to fetch LinkedIn data"
//         );
//     }

//     // Set the content type to JSON
//     header('Content-Type: application/json');

//     // Send the response as JSON
//     echo json_encode($response);
// }
// else{
//     echo "Not fetched";
}
?>
