<?php
// Initialize sessions or user authentication checks

include("../config/authentication.php"); // Adjust the path as needed
// Include common header
include("../shared/header.php"); // Adjust the path as needed

// Handle URL routing for admin dashboard or other features
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page === 'dashboard') {
        include("dashboard.php");
    } elseif ($page === 'create') {
        include("create.php");
    } elseif ($page === 'read') {
        include("read.php");
    } elseif ($page === 'update') {
        include("update.php");
    } elseif ($page === 'delete') {
        include("delete.php");
    } else {
        // Handle invalid or unknown page
        echo "Page not found.";
    }
} else {
    // Default behavior when no page is specified
    include("dashboard.php");
}

// Include common footer
include("../shared/footer.php");
?>
