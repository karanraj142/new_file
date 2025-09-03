<?php
session_start();
ob_start();

// Include DB connection
include('db_conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = strtolower(trim($_POST['name'] ?? ''));
    $password = trim($_POST['password'] ?? '');

    // ✅ Admin login
    if ($email === 'admin@gmail.com' && $password === 'admin1234a') {
        $_SESSION['user_type'] = 'admin';
        header("Location: admin_page.php");
        exit();
    }

    // ✅ User login
    $stmt = $conn->prepare("SELECT id, password FROM registraion WHERE email = ?");
    if (!$stmt) {
        die("Database Error: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($user_id, $plain_password);
        $stmt->fetch();

        // plain text password check
        if ($password === $plain_password) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_type'] = 'user';
            header("Location: home.php");
            exit();
        } else {
            echo "<script>alert('Invalid password'); history.back();</script>";
        }
    } else {
        echo "<script>alert('Invalid email'); history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}

ob_end_flush();
?>
