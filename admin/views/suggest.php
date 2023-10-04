<?php
include ./../../config/database.php;

if (isset($_GET["search"])) {
    $searchKeyword = $_GET["search"];
    
    // Retrieve suggestions from the "students" table
    $sql = "SELECT name FROM students WHERE LOWER(name) LIKE '%" . strtolower($searchKeyword) . "%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='suggestion'>" . $row["name"] . "</div>";
        }
    } else {
        echo "No suggestions found.";
    }
}
?>
