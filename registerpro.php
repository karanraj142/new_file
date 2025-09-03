<?php
include('db_conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $f_name = $_POST['fname'] ?? '';
    $l_name = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $cpassword = $_POST['c_password'] ?? '';

    // 1. Check password match
    if ($password !== $cpassword) {
        echo " Passwords do not match.";
        exit;
    }

    
    $check_query = "SELECT * FROM registraion WHERE email = '$email'";
    $result = mysqli_query($conn, $check_query);

    if (!$result) {
        echo " Error checking user: " . mysqli_error($conn);
        exit;
    }

    if (mysqli_num_rows($result) > 0) {
        echo " Email already registered.";
    } else {
        // 4. Insert into DB
        $insert_query = "INSERT INTO registraion (fname, lname, email, password, conf_password) 
                         VALUES ('$f_name', '$l_name', '$email', '$password', '$cpassword')";

        if (mysqli_query($conn, $insert_query)) {
            echo " Successfully Registered!";
        } else {
            echo " Insert failed: " . mysqli_error($conn);
        }
    }
}
?>



