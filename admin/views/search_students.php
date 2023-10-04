<?php
include("../../config/database.php");

if (isset($_POST["search"])) {
    $searchKeyword = $_POST["search"];
    
    // Query to retrieve search results based on $searchKeyword
    $sql = "SELECT name, email FROM students WHERE LOWER(name) LIKE '%" . strtolower($searchKeyword) . "%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='search-result'>";
            echo "<p>Name: " . $row["name"] . "</p>";
            echo "<p>Email: " . $row["email"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }
}
?>
