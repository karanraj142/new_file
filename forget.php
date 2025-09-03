<?php
include('db_conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $newpass = trim($_POST['password'] ?? '');

    if (empty($email) || empty($newpass)) {
        die("Email and password cannot be empty");
    }

    // WARNING: Store as plain text is NOT recommended!
    $plain_password = $newpass;

    $stmt = $conn->prepare("UPDATE registraion SET password=?, conf_password=? WHERE email=?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("sss", $plain_password, $plain_password, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<p class='success'>Password updated successfully.</p>";
    } else {
        echo "<p class='error'>No such email found or password unchanged.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 320px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<form method="post">
    <h2>Reset Password</h2>
    <input type="email" name="email" placeholder="Your Email" required />
    <input type="password" name="password" minlength="8" maxlength="10" placeholder="New Password" required />
    <button type="submit">Reset Password</button>
</form>

</body>
</html>
