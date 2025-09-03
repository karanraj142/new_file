<?php
include('db_conn.php');

$f_name   = $_POST['fname']      ?? '';
$l_name   = $_POST['lname']      ?? '';
$email    = $_POST['email']      ?? '';
$password = $_POST['password']   ?? '';
$cpassword = $_POST['c_password'] ?? '';


if (empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($cpassword)) {
    die("All fields are required.");
}

if ($password !== $cpassword) {
    die("Passwords do not match.");
}

 
$stmt = $conn->prepare("INSERT INTO `registraion` (`fname`, `lname`, `email`, `password`) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $f_name, $l_name, $email, $password);

if ($stmt->execute()) {
    echo "<script>
            alert('User registered successfully (plain password)');
            window.location = 'admin_user.php';
          </script>";
} else {
    echo "Insert failed: " . $stmt->error;
}

$stmt->close();
?>
