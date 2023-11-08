<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <!-- Add Bootstrap CSS (Place this before your custom CSS) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link your custom CSS file -->
    <link rel="stylesheet" type="text/css" href="./../assets/css/admin_dashboard.css">


    <style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
    <div class="container">
        
    <h1>User List</h1>
    <div class="row">
            <div class="col-md-6">
                <a href="views/create_user.php" class="btn btn-primary btn-add-student">Add Student</a>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="search" placeholder="Search by name" onkeydown="handleEnterKey(event)">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" onclick="searchStudents()">Search</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Search Bar -->
        <!-- <div class="input-group">
        <input type="text" class="form-control" id="search" placeholder="Search by name" onkeydown="handleEnterKey(event)">
 <div class="input-group-append">
                <button class="btn btn-primary" type="button" onclick="searchStudents()">Search</button>
            </div>
        </div> -->

        <!-- User List Table -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">

            <?php
        // Include the database configuration file
        include("./../config/database.php");
        

        // Fetch the list of users from the database
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            echo '<table class="table">
            <table class="table user-list">

            <thead>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>LinkedIn Link</th>
            <th>Skills</th>
            <th>Interests</th>
            <th>Current Job</th>
            <th>Domain of intest</th>
            <th>&nbsp;</th>
            </tr>
            </thead>
           <tbody>';    
           
           while ($row = $result->fetch_assoc()) {
            echo'
            	<tr>
                      <td>
                      <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
            <a href="../common/user_profile.php?id=' . $row['id'] . '" class="user-link">' . $row['name'] . '</a>
                <span class="user-subhead">Admin</span>
                </td>
                        <td> <a href="mailto:' . $row['email'] . '">'. $row['email'] .'</a></td>
                        <td><a href="' . $row['linkedin_link'] . '">Linked in: <br>'. $row['name'].'<a></td>
                        <td class="skill_class">' . $row['skills'] . '</td>
                       <td>' . $row['interests'] . '</td>
                        <td>' . $row['current_job_company'] . '</td>
                        <td>' . $row['domain_of_work'] . '</td>
					             
            <td style="width: 20%;">
                <a href="#" class="table-link">
                    <span class="fa-stack">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="./views/update_profile.php?id=' . $row['id'] . '" class="table-link">
                    <span class="fa-stack">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
                <a href="#" class="table-link danger">
                    <span class="fa-stack">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </td>
        </tr>
        ';
    }

    echo'
    </tbody>
				</table>
			</div>
			<ul class="pagination pull-right">
				<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
			</ul>
		</div>
	</div>
</div>
</div>';
        } 
        else {
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
<script src="./../assets/js/autosuggest.js"></script>

</body>
</html>
