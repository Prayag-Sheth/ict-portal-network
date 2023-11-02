      <?php 
        if (isset($_GET['id'])) {
            $userId = $_GET['id'];

            // Include the database configuration file
            include("./../../config/database.php");

            // Fetch user data from the database
            $sql = "SELECT * FROM students WHERE id = $userId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
          
                                             
          ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo' Update: '. $user['name'].' ';?></title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@v6-alpha1/dist/css/tempus-dominus.css">
    <link rel="stylesheet" type="text/css" href="./../../assets/css/update_profile.css">
    
    
  </head>
<body>
  

 <br>
<main class="container mt-5 mb-5">
      
      <main class="row justify-content-center">



<!-- Inside your HTML body, add a JavaScript variable to hold the userId -->
<script>
    var userId = <?php echo json_encode($userId); ?>;
</script>



        <section class="col-10">
          <div class="card shadow pb-3">
            <div class="row justify-content-center">
              <div class="col-4 position-relative">
                    <img src="" class="rounded-circle card-profile-image position-absolute top-0 start-50"><span class="btn btn-light btn-sm rounded-circle edit-img-btn position-absolute"><i class="bi bi-camera-fill"></i></span>
              </div>
            </div>
            <div class="card-header bg-secondary border-0 pt-5 pb-5"> </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="d-flex flex-row justify-content-center mt-5">
                    <span class="px-2">
                      22 Friends
                    </span>
                    <span class="px-2">
                      20 Followers
                    </span>
                    <span class="px-2">
                      19 Posts
                    </span>
                  </div>
                </div>
              </div>
              <div class="text-center my-4">
                <div class="h2">
                <?php
                echo ' ' . $user['name'] .' ';
            }
            
        } else {
            // Handle the case where no ID is provided (e.g., display an error message)
            echo '<p class="lead">User not found.</p>';
            echo'<a href="./../dashboard.php">Go back to user list</a>';
        }
                ?>
                </div>
                
                <div class="my-3 position-relative w-100">
                  <span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inform" id="location-edit-btn" data-form="location-edit-form" data-for="location"><i class="bi bi-pencil-fill" data-form="location-edit-form" data-for="location"></i></span>
                  <input type="text" class="h5 text-center form-control-plaintext w-50 ms-auto me-auto m-0 p-0" id="location" value="York, England" readonly/>
                  <!--Location Edit Form-->
                  <form class="row gy-3 w-50 ms-auto me-auto mb-3 d-none" id="location-edit-form">
                    <div class="h5 text-primary mb-0">Location info</div>
  <div class="col-6 form-floating">
    <input type="text" class="form-control ps-3" id="city" placeholder="Add a city">
    <label for="city" class="form-label mx-2 ps-3">City</label>
  </div>
  <div class="col-6 form-floating">
    <input type="text" class="form-control ps-3" id="country" placeholder="Add a country">
    <label for="country" class="form-label mx-2 ps-3"> Country</label>
  </div>
 <div class="text-center">
   <button type="button" class="col-3 my-2 btn btn-primary rounded-pill mx-2" id="location-edit-form-cancel">Cancel</button>
    <button type="button" class="col-3 my-2 btn btn-primary rounded-pill mx-2" id="location-edit-form-save">Save</button>
                    </div>
</form>
                  <!--Edit Form End-->
                </div>
                
                <div class="d-flex justify-content-center my-0 position-relative w-100">
                  <span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inform" id="age-edit-btn" data-form="age-edit-form" data-for="age"><i class="bi bi-pencil-fill" data-form="age-edit-form" data-for="age"></i></span>
                  <div class="h5" id="age"><i class="bi bi-gender-female"></i><input type="text" class="m-0 d-inline px-2 py-0 text-start form-control-plaintext w-10 ms-auto me-auto" value="38" readonly/></div>
                  <!--Age Edit Form-->  
                  <form class="row gy-3 w-50 ms-auto me-auto mb-3 d-none" id="age-edit-form">
                      <div class="h5 text-primary mb-0">Basic info</div>
                      <div class="col-8 ms-auto me-auto">
                       <select class="form-select ps-3">
  <option selected disabled>Gender</option>
  <option value="m">Male</option>
  <option value="f">Female</option>
  <option value="i">Intersex</option>
</select>        </div>
                     <div class="col-8 ms-auto me-auto">
<div class='input-group' id='datepicker'> 
   <input id='viewModeInput' type='number' class='form-control ps-3'min="1" step="1" />
   <!-- <input id='viewModeInput' type='date' class='form-control ps-3' /> -->
   <!-- <span class='input-group-text' data-td-target='#datepicker' data-td-toggle='datetimepicker'> -->
   </span>
       </div></div>
                   
                     
 <div class="text-center">
   <button type="button" class="col-3 my-2 btn btn-primary rounded-pill mx-2" id="age-edit-form-cancel">Cancel</button>
    <button type="button" class="col-3 my-2 btn btn-primary rounded-pill mx-2" id="age-edit-form-save">Save</button>
                    </div>
</form> <!--Age Edit Form End-->
                </div>
                
                <div class="my-3 position-relative w-100">
                  <span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inform" id="work-edit-btn" data-for="work" data-form="work-edit-form"><i class="bi bi-pencil-fill" data-for="work" data-form="work-edit-form"></i></span>
                 <input type="text" class="h6 m-0 p-0 text-center form-control-plaintext w-50 ms-auto me-auto" id="work" value="<?php echo $user['domain_of_work']?>" readonly/>


<!--Work Edit Form-->
                   <form class="row gy-3 w-75 ms-auto me-auto mb-3 d-none" id="work-edit-form">
                    @csrf
                      <div class="h5 text-primary mb-0">Work info</div>
  <div class="col-8 ms-auto me-auto form-floating">
    <input type="text" class="form-control ps-3" id="job" placeholder="Add a job">
    <label for="job" class="form-label mx-2 ps-3">Job title</label>
  </div>
  <div class="col-8 ms-auto me-auto form-floating">
    <input type="text" class="form-control ps-3" id="company" placeholder="Add a workplace">
    <label for="company" class="form-label mx-2 ps-3">Company name</label>
  </div>
 <div class="text-center">
   <button type="button" class="col-2 my-2 btn btn-primary rounded-pill mx-2" id="work-edit-form-cancel">Cancal</button>
    <button type="button" class="col-2 my-2 btn btn-primary rounded-pill mx-2" id="work-edit-form-save">Save</button>
                    </div>
</form>
<!--End Work Edit Form-->
                </div>
                <div class='my-3 position-relative w-100'>
                  <span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inform" id="study-edit-btn" data-form="study-edit-form" data-for="study"><i class="bi bi-pencil-fill" data-form="study-edit-form" data-for="study"></i></span>
                  <input type="text" class="h6 m-0 p-0 text-center form-control-plaintext w-50 ms-auto me-auto" id="study" value="University of St. Andrews" readonly/>
                  <!--School Edit Form-->
                  <form class="row gy-3 w-75 ms-auto me-auto d-none" id="study-edit-form">
                     <div class="h5 text-primary mb-0">Education info</div>
  <div class="col-8 ms-auto me-auto form-floating">
    <input type="text" class="form-control ps-3" id="major" placeholder="Add a subject">
    <label for="major" class="form-label mx-2 ps-3">Study subject</label>
  </div>
  <div class="col-8 ms-auto me-auto form-floating">
    <input type="text" class="form-control ps-3" id="school" placeholder="Add a school">
    <label for="school" class="form-label mx-2 ps-3">School name</label>
  </div>
 <div class="text-center">
   <button type="button" class="col-2 my-2 btn btn-primary rounded-pill mx-2" id="study-edit-form-cancel">Cancel</button>
    <button type="button" class="col-2 my-2 btn btn-primary rounded-pill mx-2" id="study-edit-form-save">Save</button>
                    </div>
</form><!--End School Edit Form-->
                </div>
                </div>
                <hr class="mb-0">
              <section class="row">
                 <div class="col-12">
                  <div class="h6 mt-4 mb-2 position-relative w-100">About<span class="btn btn-light btn-sm position-absolute rounded-circle edit-btn edit-inline" id="about-edit-btn"><i class="bi bi-pencil-fill" data-edit="about"></i></span></div>
                  <textarea class="m-0 p-1 form-control-plaintext w-100" id="about" rows="3" placeholder="Write something about yourself" readonly>England is a country that is part of the United Kingdom. It shares land borders with Wales to its west and Scotland to its north. ... The country covers five-eighths of the island of Great Britain, which lies in the North Atlantic, and includes over 100 smaller islands, such as the Isles of Scilly and the Isle of Wight.</textarea>
                </div>
                
                <div class="col-12">
                  <div class="h6 mt-4 mb-2 position-relative w-100">Interests <span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inline" id="interests-edit-btn"><i data-edit="interests" class="bi bi-pencil-fill"></i></span></div>
                  <textarea class="m-0 p-1 form-control-plaintext w-100" id="interests" placeholder="Add interests" rows="1" readonly>Planning and organization skills.</textarea>
                </div>
                <div class="col-12">
                  <div class="h6 mt-4 mb-2 position-relative w-100">Favorite quote<span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inline" id="quote-edit-btn" data-edit="quote"><i class="bi bi-pencil-fill" data-edit="quote"></i></span></div><textarea class="m-0 p-1 form-control-plaintext w-100" id="quote" rows="1" placeholder="Add a favorite quote" readonly>!!!! -Esinstein</textarea>
                </div>
                <div class="row" id="contact">
                <div class="col-4">
                  <div class="h6 mt-4 mb-2 position-relative w-100 edit-btn-container">Email <span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inform" id="contact-edit-btn" data-form="contact-edit-form" data-for="contact"><i class="bi bi-pencil-fill" data-form="contact-edit-form" data-for="contact"></i></span></div>
                  <input type="text" class="m-0 p-0 form-control-plaintext w-100" placeholder="Add an email" value="hello@gmail.com" readonly/>
                </div>
                <div class="col-4">
                  <div class="h6 mt-4 mb-2 position-relative w-100 edit-btn-container">Website<span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inform" id="contact-edit-btn" data-form="contact-edit-form" data-for="contact"><i class="bi bi-pencil-fill" data-form="contact-edit-form" data-for="contact"></i></span></div>
                  <input type="text" class="m-0 p-0 form-control-plaintext w-100" placeholder="Add a website" value="www.you.com" readonly/>
                </div>
                <div class="col-4">
                  <div class="h6 mt-4 mb-2 position-relative w-100 edit-btn-container">Social media<span class="btn btn-light btn-sm rounded-circle position-absolute edit-btn edit-inform" id="contact-edit-btn" data-form="contact-edit-form" data-for="contact"><i class="bi bi-pencil-fill" data-form="contact-edit-form" data-for="contact"></i></span></div>
                   <input type="text" class="m-0 p-0 form-control-plaintext w-100" placeholder="Add a social link" value="facebook.com/a" readonly/>
                </div>
                </div>
                <!--Contact Edit Form-->
                <form class="row gy-3 w-50 ms-auto me-auto mb-3 d-none" id="contact-edit-form">
                      <div class="h5 text-center text-primary mb-0">Contacts</div>
  <div class="col-12 ms-auto me-auto form-floating">
    <input type="email" class="form-control ps-3" id="email" placeholder="Add an email">
    <label for="email" class="form-label mx-2 ps-3">Email</label>
  </div>
  <div class="col-6 ms-auto me-auto form-floating">
    <input type="url" class="form-control ps-3" id="website" placeholder="Add a website">
    <label for="website" class="form-label mx-2 ps-3">Website</label>
  </div>
                  <div class="col-6 ms-auto me-auto form-floating">
    <input type="url" class="form-control ps-3" id="sociallink" placeholder="Add a social link">
    <label for="sociallink" class="form-label mx-2 ps-3">Social link</label>
  </div>
 <div class="text-center">
   <button type="button" class="col-3 my-2 btn btn-primary rounded-pill mx-2" id="contact-edit-form-cancel">Cancel</button>
    <button type="button" class="col-3 my-2 btn btn-primary rounded-pill mx-2" id="contact-edit-form-save workButton">Save</button>
                    </div>
                </form>
                <!--End of Contact Form-->
                
               
              </section>
              
            </div>
          </div>
        </d>
      </d>
    </div>
  
  <!--Toast message-->
  <div class="position-fixed top-0 end-0 p-4">
    
  <div id="toastTest" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true" data-bs-autohide="true" data-bs-delay="5000">
    <div class="toast-header">
      <strong class="me-auto">Sorry man</strong>
      <button type="button" class="btn-close toast-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
      The update failed. We apologise for the inconvenience.
    </div>
  </div>
</div>

<?php
$conn->close();
?>

</body>

</html>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




<script src="./../../assets/js/ajax.js"> 
var userId = <?php echo "$userId"; ?>;
</script>
<script src="./../../assets/js/update_profile.js"> </script>

    
<!-- Popperjs -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<!-- Tempus Dominus JavaScript -->
<script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@v6-alpha1/dist/js/tempus-dominus.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script>

