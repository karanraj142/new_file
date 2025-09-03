
<?php
include('db_conn.php');
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Not logged in
    $_SESSION['error'] = "Please log in to search for buses.";
    header("Location: login.php");
    exit();
}
?>