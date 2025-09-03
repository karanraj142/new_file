<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 60px auto;
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h3 {
        text-align: center;
        font-weight: normal;
        color: #333;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        color: #333;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 15px;
        transition: border-color 0.3s;
    }

    input:focus {
        border-color: #007BFF;
        outline: none;
    }

    .btn-primary {
        display: block;
        width: 100%;
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    


<div class="container">
    <h3>Add User</h3>
    <form action="add_user_pro.php" method="post">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" required>
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" required>
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="c_password">Confirm Password</label>
            <input type="password" id="c_password" name="c_password" required>
        </div>

        <input type="submit" name="add_user" value="Add User" class="btn-primary">
    </form>
</div>
</body>
</html>