<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to login if not logged in
    header("Location: login.php");
    exit();
}
?>